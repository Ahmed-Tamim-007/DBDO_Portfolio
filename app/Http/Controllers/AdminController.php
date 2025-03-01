<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Global_info;
use App\Models\Navbar;
use App\Models\User;
use App\Models\HomeHeader;
use App\Models\HomeSecOne;
use App\Models\Stat;
use App\Models\Sub_Port;
use App\Models\Products;
use App\Models\Teams;
use App\Models\Reviews;

class AdminController extends Controller
{
    // Viewing pages
    public function index() {
        return view('admin.dashboard');
    }
    public function global_set() {
        $data = Global_info::first();
        return view('admin.global_set', compact('data'));
    }
    public function header_setting() {
        $home_h = HomeHeader::first();
        return view('admin.header_setting', compact('home_h'));
    }
    public function footer_setting() {
        return view('admin.footer_setting');
    }
    public function home_setting() {
        $home_h = HomeHeader::first();
        $home_sec_1 = HomeSecOne::first();
        $stats = Stat::first();
        $s_p = Sub_Port::first();
        return view('admin.home_setting', compact('home_h', 'home_sec_1', 'stats', 's_p'));
    }
    public function portfolio_setting() {
        $s_p = Sub_Port::first();
        return view('admin.portfolio_setting', compact('s_p'));
    }
    public function about_setting() {
        $teams = Teams::all();
        $reviews = Reviews::all();
        return view('admin.about_setting', compact('teams', 'reviews'));
    }
    public function product() {
        $products = Products::all();
        return view('admin.product', compact('products'));
    }


    // Function for handleing Compamy Logo
    public function logo_edit(Request $request) {
        $data = Global_info::find(1);

        $logo = $request->logo;
        if ($logo) {
            // Check if there's an existing logo and delete the old file
            if ($data->Company_logo && file_exists(public_path('uploads/' . $data->Company_logo))) {
                unlink(public_path('uploads/' . $data->Company_logo));
            }

            // Upload the new logo
            $logoname = time() . '.' . $logo->getClientOriginalExtension();
            $request->logo->move('uploads', $logoname);
            $data->Company_logo = $logoname;
        }

        $data->save();

        return redirect()->back()->with('success', 'Logo changed successfully.');
    }

    // Function for Global changes
    public function global_edit(Request $request) {
        $data = Global_info::find(1);

        $data->Company_name = $request->company_name;
        $data->Company_address = $request->company_address;
        $data->Phone = $request->phone_number;
        $data->Whatsapp = $request->whatsapp;
        $data->Email_address = $request->email_address;
        $data->AboutUs_text = $request->AboutUs_text;

        $data->save();

        return redirect()->back()->with('success', 'Information updated successfully.');
    }

    // Function for handleing Home page header
    public function home_header(Request $request) {
        $data = HomeHeader::find(1);

        $data->Title_1 = $request->title_1;
        $data->Title_2 = $request->title_2;
        $data->Title_3 = $request->title_3;

        $image_1 = $request->image_1;
        if ($image_1) {
            if ($data->Image_1 && file_exists(public_path('uploads/' . $data->Image_1))) {
                unlink(public_path('uploads/' . $data->Image_1));
            }

            $image_1_name = uniqid() . '.' . $image_1->getClientOriginalExtension();
            $request->image_1->move('uploads', $image_1_name);
            $data->Image_1 = $image_1_name;
        }

        $image_2 = $request->image_2;
        if ($image_2) {
            if ($data->Image_2 && file_exists(public_path('uploads/' . $data->Image_2))) {
                unlink(public_path('uploads/' . $data->Image_2));
            }

            $image_2_name = uniqid() . '.' . $image_2->getClientOriginalExtension();
            $request->image_2->move('uploads', $image_2_name);
            $data->Image_2 = $image_2_name;
        }

        $image_3 = $request->image_3;
        if ($image_3) {
            if ($data->Image_3 && file_exists(public_path('uploads/' . $data->Image_3))) {
                unlink(public_path('uploads/' . $data->Image_3));
            }

            $image_3_name = uniqid() . '.' . $image_3->getClientOriginalExtension();
            $request->image_3->move('uploads', $image_3_name);
            $data->Image_3 = $image_3_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Header updated successfully.');
    }

    // Function for handleing Home page header
    public function other_header(Request $request) {
        $data = HomeHeader::find(1);

        $image_1 = $request->About_header_img;
        if ($image_1) {
            if ($data->About_header_img && file_exists(public_path('uploads/' . $data->About_header_img))) {
                unlink(public_path('uploads/' . $data->About_header_img));
            }

            $image_1_name = uniqid() . '.' . $image_1->getClientOriginalExtension();
            $request->About_header_img->move('uploads', $image_1_name);
            $data->About_header_img = $image_1_name;
        }

        $image_2 = $request->Product_header_img;
        if ($image_2) {
            if ($data->Product_header_img && file_exists(public_path('uploads/' . $data->Product_header_img))) {
                unlink(public_path('uploads/' . $data->Product_header_img));
            }

            $image_2_name = uniqid() . '.' . $image_2->getClientOriginalExtension();
            $request->Product_header_img->move('uploads', $image_2_name);
            $data->Product_header_img = $image_2_name;
        }

        $image_3 = $request->Blog_header_img;
        if ($image_3) {
            if ($data->Blog_header_img && file_exists(public_path('uploads/' . $data->Blog_header_img))) {
                unlink(public_path('uploads/' . $data->Blog_header_img));
            }

            $image_3_name = uniqid() . '.' . $image_3->getClientOriginalExtension();
            $request->Blog_header_img->move('uploads', $image_3_name);
            $data->Blog_header_img = $image_3_name;
        }

        $image_4 = $request->Contact_header_img;
        if ($image_4) {
            if ($data->Contact_header_img && file_exists(public_path('uploads/' . $data->Contact_header_img))) {
                unlink(public_path('uploads/' . $data->Contact_header_img));
            }

            $image_4_name = uniqid() . '.' . $image_4->getClientOriginalExtension();
            $request->Contact_header_img->move('uploads', $image_4_name);
            $data->Contact_header_img = $image_4_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Header image updated successfully.');
    }

    // Function for handleing Home page Section One Headings
    public function home_sec_1(Request $request) {
        $data = HomeSecOne::find(1);

        $data->Heading_1 = $request->head_1;
        $data->Heading_2 = $request->head_2;
        $data->Paragraph = $request->para;

        $data->save();

        return redirect()->back()->with('success', 'Section One updated successfully.');
    }

    // Function for handleing Home page Section One Cards
    public function home_sec_1_card(Request $request) {
        $data = HomeSecOne::find(1);

        $data->Card_title_1 = $request->card_title_1;
        $data->Card_para_1 = $request->card_para_1;
        $data->Card_dsg_1 = $request->card_dsg_1;
        $data->Card_link_1 = $request->card_link_1;

        $data->Card_title_2 = $request->card_title_2;
        $data->Card_para_2 = $request->card_para_2;
        $data->Card_dsg_2 = $request->card_dsg_2;
        $data->Card_link_2 = $request->card_link_2;

        $data->Card_title_3 = $request->card_title_3;
        $data->Card_para_3 = $request->card_para_3;
        $data->Card_dsg_3 = $request->card_dsg_3;
        $data->Card_link_3 = $request->card_link_3;

        $data->Card_title_4 = $request->card_title_4;
        $data->Card_para_4 = $request->card_para_4;
        $data->Card_dsg_4 = $request->card_dsg_4;
        $data->Card_link_4 = $request->card_link_4;

        $img_1 = $request->card_img_1;
        if ($img_1) {
            if ($data->Card_img_1 && file_exists(public_path('uploads/' . $data->Card_img_1))) {
                unlink(public_path('uploads/' . $data->Card_img_1));
            }

            $img_1_name = uniqid() . '.' . $img_1->getClientOriginalExtension();
            $request->card_img_1->move('uploads', $img_1_name);
            $data->Card_img_1 = $img_1_name;
        }

        $img_2 = $request->card_img_2;
        if ($img_2) {
            if ($data->Card_img_2 && file_exists(public_path('uploads/' . $data->Card_img_2))) {
                unlink(public_path('uploads/' . $data->Card_img_2));
            }

            $img_2_name = uniqid() . '.' . $img_2->getClientOriginalExtension();
            $request->card_img_2->move('uploads', $img_2_name);
            $data->Card_img_2 = $img_2_name;
        }

        $img_3 = $request->card_img_3;
        if ($img_3) {
            if ($data->Card_img_3 && file_exists(public_path('uploads/' . $data->Card_img_3))) {
                unlink(public_path('uploads/' . $data->Card_img_3));
            }

            $img_3_name = uniqid() . '.' . $img_3->getClientOriginalExtension();
            $request->card_img_3->move('uploads', $img_3_name);
            $data->Card_img_3 = $img_3_name;
        }

        $img_4 = $request->card_img_4;
        if ($img_4) {
            if ($data->Card_img_4 && file_exists(public_path('uploads/' . $data->Card_img_4))) {
                unlink(public_path('uploads/' . $data->Card_img_4));
            }

            $img_4_name = uniqid() . '.' . $img_4->getClientOriginalExtension();
            $request->card_img_4->move('uploads', $img_4_name);
            $data->Card_img_4 = $img_4_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Section One updated successfully.');
    }

    // Function for Stats changes
    public function stat_edit(Request $request) {
        $data = Stat::find(1);

        $data->st_num_1 = $request->st_num_1;
        $data->st_title_1 = $request->st_title_1;
        $data->st_para_1 = $request->st_para_1;

        $data->st_num_2 = $request->st_num_2;
        $data->st_title_2 = $request->st_title_2;
        $data->st_para_2 = $request->st_para_2;

        $data->st_num_3 = $request->st_num_3;
        $data->st_title_3 = $request->st_title_3;
        $data->st_para_3 = $request->st_para_3;

        $data->save();

        return redirect()->back()->with('success', 'Stats updated successfully.');
    }

    // Function for Subscription changes
    public function subsc_edit(Request $request) {
        $data = Sub_Port::find(1);

        $data->sub_h = $request->sub_h;
        $data->sub_p = $request->sub_p;

        $data->save();

        return redirect()->back()->with('success', 'Section updated successfully.');
    }

    // Function for Portfolio Top changes in home page
    public function portfolio_head_edit(Request $request) {
        $data = Sub_Port::find(1);

        $data->portfolio_h1 = $request->portfolio_h1;
        $data->portfolio_h2 = $request->portfolio_h2;
        $data->portfolio_para = $request->portfolio_para;

        $data->save();

        return redirect()->back()->with('success', 'Portfolio Top updated successfully.');
    }

    // Function for handleing Portfolio of Home page
    public function portfolio_edit(Request $request) {
        $data = Sub_Port::find(1);

        $data->portfolio_1_h1 = $request->portfolio_1_h1;
        $data->portfolio_1_h2 = $request->portfolio_1_h2;
        $data->portfolio_para_1 = $request->portfolio_para_1;

        $data->portfolio_2_h1 = $request->portfolio_2_h1;
        $data->portfolio_2_h2 = $request->portfolio_2_h2;
        $data->portfolio_para_2 = $request->portfolio_para_2;

        $data->portfolio_3_h1 = $request->portfolio_3_h1;
        $data->portfolio_3_h2 = $request->portfolio_3_h2;
        $data->portfolio_para_3 = $request->portfolio_para_3;

        $img_1 = $request->portfolio_img_1;
        if ($img_1) {
            if ($data->portfolio_img_1 && file_exists(public_path('uploads/' . $data->portfolio_img_1))) {
                unlink(public_path('uploads/' . $data->portfolio_img_1));
            }

            $img_1_name = uniqid() . '.' . $img_1->getClientOriginalExtension();
            $request->portfolio_img_1->move('uploads', $img_1_name);
            $data->portfolio_img_1 = $img_1_name;
        }

        $img_2 = $request->portfolio_img_2;
        if ($img_2) {
            if ($data->portfolio_img_2 && file_exists(public_path('uploads/' . $data->portfolio_img_2))) {
                unlink(public_path('uploads/' . $data->portfolio_img_2));
            }

            $img_2_name = uniqid() . '.' . $img_2->getClientOriginalExtension();
            $request->portfolio_img_2->move('uploads', $img_2_name);
            $data->portfolio_img_2 = $img_2_name;
        }

        $img_3 = $request->portfolio_img_3;
        if ($img_3) {
            if ($data->portfolio_img_3 && file_exists(public_path('uploads/' . $data->portfolio_img_3))) {
                unlink(public_path('uploads/' . $data->portfolio_img_3));
            }

            $img_3_name = uniqid() . '.' . $img_3->getClientOriginalExtension();
            $request->portfolio_img_3->move('uploads', $img_3_name);
            $data->portfolio_img_3 = $img_3_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Section One updated successfully.');
    }

    // Function for Creating Products
    public function add_product(Request $request)
    {
        $request->validate([
            'product_img'   => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'product_title' => 'required|string|max:25',
            'product_des'   => 'required|string|max:255',
            'category'      => 'required|string|max:25',
            'price'         => 'required|string',
            'designer'      => 'required|string|max:25',
            'link'          => 'required|string|max:255',
        ]);

        $data = new Products();

        $image = $request->file('product_img');
        if ($image) {
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $image_name);

            $data->product_img = $image_name;
        }

        $data->product_title = $request->product_title;
        $data->product_des = $request->product_des;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->designer = $request->designer;
        $data->link = $request->link;

        $data->save();

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    // Function for Updating Products
    public function update_product(Request $request, $id) {
        $data = Products::find($id);

        $data->product_title = $request->product_title_e;
        $data->product_des = $request->product_des_e;
        $data->category = $request->category_e;
        $data->price = $request->price_e;
        $data->designer = $request->designer_e;
        $data->link = $request->link_e;

        $img = $request->product_img_e;
        if ($img) {
            if ($data->product_img && file_exists(public_path('uploads/' . $data->product_img))) {
                unlink(public_path('uploads/' . $data->product_img));
            }

            $img_name = uniqid() . '.' . $img->getClientOriginalExtension();
            $request->product_img_e->move('uploads', $img_name);
            $data->product_img = $img_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    // Function for Deleting Products
    public function delete_product($id) {
        $product = Products::find($id);

        // Delete the product image if it exists
        if ($product->product_img && file_exists(public_path('uploads/' . $product->product_img))) {
            unlink(public_path('uploads/' . $product->product_img));
        }

        // Delete the product
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    // Function for Creating Teams
    public function add_team(Request $request)
    {
        $request->validate([
            'image'   => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'name' => 'required|string|max:25',
            'designation'   => 'required|string|max:25',
            'facebook'   => 'required|string|max:25',
            'github'   => 'required|string|max:25',
            'linkedin'   => 'required|string|max:25',
        ]);

        $data = new Teams();

        $image = $request->file('image');
        if ($image) {
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $image_name);

            $data->image = $image_name;
        }

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->facebook = $request->facebook;
        $data->github = $request->github;
        $data->linkedin = $request->linkedin;

        $data->save();

        return redirect()->back()->with('success', 'Team created successfully!');
    }

    // Function for Updating Teams
    public function update_team(Request $request, $id) {
        $data = Teams::find($id);

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->facebook = $request->facebook;
        $data->github = $request->github;
        $data->linkedin = $request->linkedin;

        $img = $request->image;
        if ($img) {
            if ($data->image && file_exists(public_path('uploads/' . $data->image))) {
                unlink(public_path('uploads/' . $data->image));
            }

            $img_name = uniqid() . '.' . $img->getClientOriginalExtension();
            $request->image->move('uploads', $img_name);
            $data->image = $img_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Team updated successfully.');
    }

    // Function for Deleting Teams
    public function delete_team($id) {
        $data = Teams::find($id);

        // Delete the product image if it exists
        if ($data->image && file_exists(public_path('uploads/' . $data->image))) {
            unlink(public_path('uploads/' . $data->image));
        }

        // Delete the product
        $data->delete();

        return redirect()->back()->with('success', 'Team deleted successfully.');
    }

    // Function for Creating Reviews
    public function add_review(Request $request)
    {
        $request->validate([
            'image'   => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'name' => 'required|string|max:25',
            'profession' => 'required|string|max:25',
            'says' => 'required|string|max:255',
        ]);

        $data = new Reviews();

        $image = $request->file('image');
        if ($image) {
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $image_name);

            $data->image = $image_name;
        }

        $data->name = $request->name;
        $data->profession = $request->profession;
        $data->says = $request->says;

        $data->save();

        return redirect()->back()->with('success', 'Review created successfully!');
    }

    // Function for Updating Reviews
    public function update_review(Request $request, $id) {
        $data = Reviews::find($id);

        $data->name = $request->name;
        $data->profession = $request->profession;
        $data->says = $request->says;

        $img = $request->image;
        if ($img) {
            if ($data->image && file_exists(public_path('uploads/' . $data->image))) {
                unlink(public_path('uploads/' . $data->image));
            }

            $img_name = uniqid() . '.' . $img->getClientOriginalExtension();
            $request->image->move('uploads', $img_name);
            $data->image = $img_name;
        }

        $data->save();

        return redirect()->back()->with('success', 'Review updated successfully.');
    }

    // Function for Deleting Reviews
    public function delete_review($id) {
        $data = Reviews::find($id);

        // Delete the product image if it exists
        if ($data->image && file_exists(public_path('uploads/' . $data->image))) {
            unlink(public_path('uploads/' . $data->image));
        }

        // Delete the product
        $data->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
