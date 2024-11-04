<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validated();

        $customer = Customer::create($validatedData);

        return response()->json(['success' => true, 'customer' => $customer], 201);
    }

    public function show($dni)
    {
        $customer = Customer::with('commune', 'region')
            ->where('dni', $dni)
            ->where('status', 'A')
            ->first();

        if (!$customer) {
            return response()->json(['message' => 'Registro no existe'], 404);
        }

        return response()->json([
            'success' => true,
            'customer' => [
                'name' => $customer->name,
                'last_name' => $customer->last_name,
                'address' => $customer->address ?? null,
                'description' => $customer->commune->description,
                'region' => $customer->region->description,
            ],
        ]);
    }

    public function delete($dni)
    {
        $customer = Customer::where('dni', $dni)->first();

        if (!$customer) {
            return response()->json(['message' => 'Registro no existe'], 404);
        }

        if ($customer->status == 'trash') {
            return response()->json(['message' => 'Registro no existe'], 404);
        }

        DB::transaction(function () use ($customer) {
            $customer->update(['status' => 'trash']);
        });

        return response()->json(['success' => true, 'message' => 'Cliente eliminado']);
    }
}