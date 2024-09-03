<?php

// app/Http/Controllers/ClickController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Click;

class ClickController extends Controller
{
    public function trackClick(Request $request)
    {
        Click::create([
            'type' => $request->type
        ]);

        return response()->json(['success' => true]);
    }
}

