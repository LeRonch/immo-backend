<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function all(){
        $properties = response()->json(Property::all());
        return $properties;
    }

    public function detail($id){
        $properties = response()->json(Property::find($id));
        return $properties;
    }

    public function post(Request $request) {

        $image = $request->image;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = Str::random(10) . '.png';
        Storage::disk('local')->put($imageName, base64_decode($image));

        $data = $request->except('image');
        $data['image'] =  asset('storage/' . $imageName);
        $property = Property::create($data);

        return response()->json($property, 201);
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return response()->json();
    }

}
