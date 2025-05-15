<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Models\Application;
    use Illuminate\Http\Request;
    use Illuminate\Validation\ValidationException;

    class ApplicationController extends Controller
    {
        // List applicants (first_name, last_name) with pagination
        public function index(Request $request)
        {
            $perPage = $request->query('per_page', 10);

            $applications = Application::select('id', 'first_name', 'last_name')
                ->paginate($perPage);

            return response()->json($applications);
        }

        // Show full applicant data by id
        public function show($id)
        {
            $application = Application::find($id);

            if (!$application) {
                return response()->json(['message' => 'Application not found'], 404);
            }

            return response()->json($application);
        }

        // Store new application from API POST
        public function store(Request $request)
        {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name'  => 'required|string|max:255',
                'email'      => 'required|email|max:255',
                'message'    => 'nullable|string',
            ]);

            $application = Application::create($validated);

            return response()->json([
                'message' => 'Application created successfully',
                'application' => $application,
            ], 201);
        }
    }
