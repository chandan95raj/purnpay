<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\MetaTag;
use App\Models\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //    Verify login
    public function verifyLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pwd' => 'required'
        ], [
            'email.required' => 'Please enter your email first!',
            'email.email' => 'Please enter a valid email!',
            'pwd.required' => 'Password field is required!'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if ($user->password == $request->pwd) {
                Session::put('adminuserid', $user->id);
                Session::put('adminusername', $user->name);
                return redirect('/dashboard');
            } else {
                return redirect()->back()->withErrors(['error' => 'Wrong password!']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'User not found!']);
        }
    }

    //signin
    public function signinView()
    {
        if (Session::has('adminuserid')) {
            return redirect('/dashboard');
        } else {
            echo view('admin.signin');
        }
    }

    public function adminLogout()
    {
        Session::flush();
        return redirect('/');
    }


    //dashboard
    public function dashboardView()
    {
        if (Session::has('adminuserid')) {
            echo view('admin.common.header');
            echo view('admin.dashboard');
            echo view('admin.common.footer');
        } else {
            echo view('admin.signin');
        }
    }

    //Manage Blog
    public function mBlogView()
    {
        if (Session::has('adminuserid')) {
            echo view('admin.common.header');
            echo view('admin.manage-blog');
            echo view('admin.common.footer');
        } else {
            echo view('admin.signin');
        }
    }

    public function saveBlogDataAjax(Request $request)
    {
        if (Session::has('adminuserid')) {
            $request->validate([
                'nstitle' => 'required',
                'nsdate' => 'required',
                'nsimg' => 'required|file|mimes:jpeg,png,jpg|max:2048',
                'nsdesc' => 'required',
                'page_name' => 'required|string|max:255',
                'meta_title' => 'required|string|max:255',
                'meta_description' => 'required|string|max:500',
                'meta_keywords' => 'required|string|max:500',
                'meta_url' => 'required|url',
                'meta_type' => 'required|string|max:50',
                'site_name' => 'required|string|max:255',
                'meta_image' => 'required|string|max:255',
                'schema' => 'nullable|string'
            ], [
                'nstitle.required' => 'Blog title is required!',
                'nsdate.required' => 'Blog Date is required!',
                'nsimg.required' => 'Blog Image is required !',
                'nsimg.file' => 'Blog Image type is invalid !',
                'nsdesc.required' => 'Blog Description is Required!',
            ]);

            $metaData = [
                "meta_title" => $request->meta_title,
                "meta_description" => $request->meta_description,
                "meta_keywords" => $request->meta_keywords,
                "meta_url" => $request->meta_url,
                "meta_type" => $request->meta_type,
                "site_name" => $request->site_name,
                "meta_image" => $request->meta_image,
                "schema" => $request->schema,
            ];

            // return response()->json($request);
            try {
                DB::beginTransaction();
                $news = new Blog();
                $news->ns_title = $request->nstitle;
                $news->created_at = Carbon::parse($request->nsdate)->setTime(now()->hour, now()->minute, now()->second);
                $news->ns_desc = $request->nsdesc;
                $news->page_name = $request->page_name;
                $news->headerdata = $metaData;
                $news->ns_delete = '0';

                if ($request->hasFile('nsimg')) {
                    $file = $request->file('nsimg');
                    $extension = $file->getClientOriginalExtension();
                    $filename = 'blog' . time() . '.' . $extension;
                    $file->move(public_path('admin/uploads/'), $filename);
                    $news->ns_img = $filename;
                }
                $result = $news->save();
                if ($result) {
                    DB::commit();
                    return response()->json(['status' => true, 'message' => 'Blog saved Successfully!'], 200);
                }
                DB::rollBack();
                return response()->json(['status' => false, 'message' => 'Something went wrong while saving into database!'], 400);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
            }
        } else {
            echo view('admin.signin');
        }
    }

    public function loadBlogAjax()
    {
        // return response()->json(true);
        try {
            if (Session::has('adminuserid')) {
                $news = Blog::where('ns_delete', '!=', '1')->latest()->get();
                if ($news->isEmpty()) {
                    return response()->json(['status' => false, 'message' => 'No Blog found!'], 404);
                }
                return response()->json(['status' => true, 'data' => $news], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Unauthorized access. Please log in.'], 401);
            }
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
    }

    //edit-blog
    public function editBlog($ns_id)
    {
        if (Session::has('adminuserid')) {
            $news = Blog::where('ns_delete', '!=', '1')->where('ns_id', '=', $ns_id)->get();
            echo view('admin.common.header');
            echo view('admin.edit-blog', compact('news'));
            echo view('admin.common.footer');
        } else {
            echo view('admin.signin');
        }
    }

    public function updateBlogDataAjax(Request $request)
    {

        if (!Session::has('adminuserid')) {
            return response()->json(['message' => 'Unauthorized access!'], 401);
        }

        try {
            DB::beginTransaction();
            $request->validate([
                'ns_id' => 'required|numeric|exists:blog,ns_id',
                'ns_title' => 'nullable|string|max:255',
                'ns_date'=> 'nullable',
                'ns_img' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
                'ns_desc' => 'nullable|string',   
                'page_name' => 'nullable|string|max:255',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'meta_keywords' => 'nullable|string|max:500',
                'meta_url' => 'nullable|url',
                'meta_type' => 'nullable|string|max:50',
                'site_name' => 'nullable|string|max:255',
                'meta_image' => 'nullable|string|max:255',
                'schema' => 'nullable|string'            
            ], [
                'ns_id.required' => 'Something went wrong',
                'ns_id.numeric' => 'Something went wrong',
                'ns_id.exists' => 'Invalid Blog ID!',
                'ns_img.file' => 'Invalid Blog File!',
                'ns_img.mimes' => 'Blog Image only jpeg, png, jpg are allowed!',
                'ns_img.max' => 'Blog Image Max size is 2 MB!',
            ]);        
            
            $metaData = [
                "meta_title" => $request->meta_title,
                "meta_description" => $request->meta_description,
                "meta_keywords" => $request->meta_keywords,
                "meta_url" => $request->meta_url,
                "meta_type" => "website",
                "site_name" => "PurnTech",
                "meta_image" => "https://purntech.com/assets/img/logo/favicon.png",
                "schema" => $request->schema,
            ];

            $news = Blog::find($request->ns_id);
            if (!$news) {
                return response()->json(['message' => 'Blog not found'], 404);
            }

            if ($request->filled('ns_title')) {
                $news->ns_title = $request->ns_title;
                $news->page_name = "Blog Details";
                $news->headerdata = $metaData;
            }            

            if ($request->filled('ns_date')) {
                $news->created_at = Carbon::parse($request->ns_date)->setTime(now()->hour, now()->minute, now()->second);
            }
            if ($request->filled('ns_desc')) {
                $news->ns_desc = $request->ns_desc;
            }
            if ($request->hasFile('ns_img')) {
                $file = $request->file('ns_img');
                $filename = 'blog' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('admin/uploads/'), $filename);
                $news->ns_img = $filename;
            }

            $news->save();
            DB::commit();

            return response()->json(['status' => true, 'message' => 'Blog updated successfully!'], 200);
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $exception->getMessage()], 400);
        }
    }

    public function deleteBlogAjax(Request $request)
    {
        if (Session::has('adminuserid')) {
            $newsID = $request->id;
            $allnws = Blog::find($newsID);
            $allnws->update([
                'ns_delete' => '1'
            ]);
            if (!$allnws) return response()->json(['message', 'Someting went wrong while Delete Blog'], 400);
            else return response()->json($allnws);
        } else {
            echo view('admin.signin');
        }
    }

    //manage-contacts
    public function manageContacts()
    {
        if (Session::has('adminuserid')) {
            $cont_msgs = Contact::orderBy('id', 'DESC')->get();
            echo view('admin.common.header');
            echo view('admin.manage-contacts', compact('cont_msgs'));
            echo view('admin.common.footer');
        } else {
            return redirect('/adm');
        }
    }


    //meta-setup
    public function metaSetup()
    {
        if (Session::has('adminuserid')) {
            $metadata = MetaTag::orderBy('created_at', 'ASC')->get();
            echo view('admin.common.header');
            echo view('admin.meta-setup',compact('metadata'));
            echo view('admin.common.footer');
        } else {
            return redirect('/adm');
        }
    }

    public function store(Request $request)
    {
        // Validate Input
        $request->validate([
            'page_name' => 'required|string|max:255',
            'page_route' => 'required|url',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'meta_keywords' => 'required|string|max:500',
            'meta_url' => 'required|url',
            'meta_type' => 'required|string|max:50',
            'site_name' => 'required|string|max:255',
            'meta_image' => 'required|string|max:255',
            'org_schema' => 'nullable|string',
            'business_schema' => 'nullable|string',
            'rating_schema' => 'nullable|string'
        ]);

        $metaData = [
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
            "meta_keywords" => $request->meta_keywords,
            "meta_url" => $request->meta_url,
            "meta_type" => $request->meta_type,
            "site_name" => $request->site_name,
            "meta_image" => $request->meta_image,
            "org_schema" => $request->org_schema,
            "business_schema" => $request->business_schema,
            "rating_schema" => $request->rating_schema,
        ];

        MetaTag::create([
            "page_name" => $request->page_name,
            "page_route" => $request->page_route,
            "headerdata" => $metaData,
            "status" => 1
        ]);

        return response()->json(['status' => 'success', 'message' => 'Meta data added successfully!']);
    }

    public function edit($id)
    {
        $meta = MetaTag::findOrFail($id);
        echo view('admin.common.header');
        echo view('admin.meta-edit',compact('meta'));
        echo view('admin.common.footer');
    }

    public function update(Request $request, $id)
    {
        $meta = MetaTag::findOrFail($id);

        $meta->update([
            "page_name" => $request->page_name,
            "page_route" => $request->page_route,
            "headerdata" => [
                "meta_title" => $request->meta_title,
                "meta_description" => $request->meta_description,
                "meta_keywords" => $request->meta_keywords,
                "meta_url" => $request->meta_url,
                "meta_type" => "website",
                "site_name" => "PurnPay",
                "meta_image" => "https://purnpay.com/web/images/PurnPay-Favicon.png",
                "org_schema" => $request->org_schema,
                "business_schema" => $request->business_schema,
                "rating_schema" => $request->rating_schema,
            ]
        ]);

        return response()->json(['success' => 'Meta Updated Successfully!']);
    }

    public function destroy($id)
    {
        $meta = MetaTag::findOrFail($id);
        $meta->delete();

        return response()->json(['success' => 'Meta Deleted Successfully!']);
    }

}
