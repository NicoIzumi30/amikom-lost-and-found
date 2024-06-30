<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;
use App\Models\ItemFound;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ItemFoundController extends Controller
{
    public function index()
    {
        $data = ItemFound::latest()->get();
        return view('main/itemFound/index', compact('data'));
    }
    public function create()
    {
        return view('main/itemFound/create');
    }
    public function edit()
    {
        return view('main/itemFound/edit');
    }

    public function detail($id)
    {
        $data = ItemFound::findOrFail($id);
        $currentHour = date('G');
        $greeting = '';

        if ($currentHour >= 5 && $currentHour < 12) {
            $greeting = "Selamat pagi";
        } elseif ($currentHour >= 12 && $currentHour < 18) {
            $greeting = "Selamat siang";
        } elseif ($currentHour >= 18 && $currentHour < 22) {
            $greeting = "Selamat sore";
        } else {
            $greeting = "Selamat malam";
        }
        // $data = [
        //     'name' => Auth::user()->name,
        //     'penemu' => 'Heru Kristanto', // ganti data yang di ambil di database
        //     'barang' => 'botol minum bewarna Biru',
        //     'lokasi' => 'basement gedung 5'
        // ];
        $message = "{$greeting} perkenalkan nama saya {$data['name']}. Mau bertanya kak, apakah benar kak {$data['penemu']} menemukan  {$data['barang']} di {$data['lokasi']}?";
        return view('main/itemFound/detailItem', ['message' => $message], compact('data'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('main.itemFound.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'location' => ['required', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create ItemFound');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('item-found', $imageName, 'public');

        ItemFound::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $imageName,
            'status' => 'belum',
            'no_tlp' => $request->no_tlp

        ]);

        return to_route('itemFound')->withSuccess('ItemFound has been created');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'location' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'status' => ['required'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update ItemFound');
        }
        $itemFound = ItemFound::findOrFail($id);
        $itemFound->user_id = $request->user_id; //hidden input di blade
        $itemFound->category_id = $request->category_id;
        $itemFound->title = $request->title;
        $itemFound->description = $request->description;
        $itemFound->location = $request->location;
        $itemFound->status = $request->status;
        $itemFound->no_tlp = $request->no_tlp;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            $oldImagePath = public_path('storage/item-found/' . $itemFound->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('item-found', $imageName, 'public');
            $itemFound->image = $imageName;
        }

        $itemFound->save();

        return to_route('')->withSuccess('ItemFound has been updated');
    }

    public function destroy($id)
    {
        ItemFound::findOrFail($id)->delete();
        return to_route('')->withSuccess('ItemFound has been deleted');
    }
}
