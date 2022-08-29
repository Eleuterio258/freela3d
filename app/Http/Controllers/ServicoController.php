<?php

namespace App\Http\Controllers;

use App\Models\Servico;

use App\Models\ImageUrl;
use App\Models\SubCategory;
use App\Models\MessageModel;
use Illuminate\Http\Request;
use App\Models\NotificaoChat;
use App\Models\ServiceComment;
use App\Models\ServiceImageUrl;
use App\Models\SubCategoryService;

class ServicoController extends Controller
{

    public function getServicoByOwner($owner)
    {


        try {
            $servico = Servico::where('owner', $owner)->get();
            return response()->json($servico);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }



    public function getServicoByCategory($category_id)
    {
        try {
            $servico = SubCategoryService::where('sub_category_id', $category_id)->get();
            $servico = $servico->map(function ($item) {
                $servico = Servico::where('id', $item->service_id)->first();
                $servico->image_url = ServiceImageUrl::where('service_id', $item->service_id)->get();
                $servico->comments = ServiceComment::where('service_id', $item->service_id)->get();
                $servico->image_url = $servico->image_url->map(function ($item) {
                    $image_url = ImageUrl::where('id', $item->image_url_id)->first();
                    $item->path = $image_url->path;
                    return $item;
                });
                return $servico;
            });


            return response()->json($servico);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function editarServico(Request $request)
    {
        try {
            $servico = Servico::where('id', $request->id)->first();
            $servico->name = $request->name;
            $servico->description = $request->description;
            $servico->price = $request->price;
            $servico->save();
            return response()->json([
                'message' => 'Serviço editado com sucesso'
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
 
}
