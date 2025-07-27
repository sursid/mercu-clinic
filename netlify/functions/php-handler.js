// Netlify function to handle Laravel API routes
export async function handler(event, context) {
    const { httpMethod, path, headers, body, queryStringParameters } = event;
    
    try {
        // For now, return a simple response
        // In production, you would typically use a different approach
        // such as deploying to a PHP hosting service and using this as a proxy
        
        if (path.startsWith('/api/')) {
            return {
                statusCode: 200,
                headers: {
                    'Content-Type': 'application/json',
                    'Access-Control-Allow-Origin': '*',
                    'Access-Control-Allow-Headers': 'Content-Type, Authorization',
                    'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, OPTIONS'
                },
                body: JSON.stringify({
                    message: 'Laravel API endpoint',
                    method: httpMethod,
                    path: path,
                    note: 'This is a placeholder. Consider deploying your Laravel backend to a PHP hosting service.'
                })
            };
        }
        
        // For non-API routes, serve the frontend
        return {
            statusCode: 200,
            headers: {
                'Content-Type': 'text/html',
            },
            body: `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercubuana Clinic</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-center text-gray-900 mb-4">Mercubuana Clinic</h1>
            <p class="text-gray-600 text-center mb-4">
                Your Laravel application is being served through Netlify Functions.
            </p>
            <div class="text-center">
                <a href="/admin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Go to Admin Panel
                </a>
            </div>
        </div>
    </div>
</body>
</html>
            `
        };
        
    } catch (error) {
        console.error('Handler Error:', error);
        return {
            statusCode: 500,
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ 
                error: 'Internal Server Error', 
                message: error.message,
                note: 'Consider deploying your Laravel backend separately'
            })
        };
    }
}
