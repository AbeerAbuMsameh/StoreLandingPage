<?php


function custom_response($status, $message, $data, $statusCode = 200)
{
    return response()->json(['status' => $status, 'message' => $message, 'data' => $data], $statusCode);
}

function errors_response($status, $message, $data = [], $statusCode = 400)
{
    // Error Response , Status Evrytime [false]
    return response()->json(['status' => $status, 'message' => $message, 'errors' => $data], $statusCode);
}

function errors_insert_response($status, $message, $data = [], $statusCode = 422)
{
    // Error Response , Status Evrytime [false]
    return response()->json(['status' => $status, 'message' => $message, 'errors' => $data], $statusCode);
}

function paginate_response($status, $message, $data, $pagination, $statusCode = 200)
{
    return response()->json(
        [
            'status' => $status,
            'message' => $message,
            'data' => $data,
            "pages" => $pagination
        ],
        $statusCode
    );
}

function main_response($status, $message, $data, $statusCode = 200)
{
    if (isset(json_decode(json_encode($data, true), true)['data'])) {
        $pagination = json_decode(json_encode($data, true), true);
        $data = $pagination['data'];
        $pages = [
//            "current_page" => $pagination['current_page'],
            "first_page_url" => $pagination['first_page_url'],
            "from" => $pagination['from'],
            "last_page" => $pagination['last_page'],
            "last_page_url" => $pagination['last_page_url'],
            "next_page_url" => $pagination['next_page_url'],
            "path" => $pagination['path'],
            "per_page" => $pagination['per_page'],
            "prev_page_url" => $pagination['prev_page_url'],
            "to" => $pagination['to'],
            "total" => $pagination['total'],
        ];
        return paginate_response($status, $message, $data, $pages, $statusCode);
    }
    return custom_response($status, $message, $data, $statusCode);
}

function formatResponse($status, $message, $data, $statusCode = 200)
{
    $input = $data['data'];
    $pages = $data['meta']['pagination'];
    return paginate_response($status, $message, $input, $pages, $statusCode);
}

function formatItemResponse($status, $message, $data, $statusCode = 200)
{
    $data = array_merge(['status' => $status], ['message' => $message], $data);
    return response()->json($data, $statusCode);
}


function formatItemsResponse($status, $message, $data, $statusCode = 200)
{
    $data = array_merge(['status' => $status], ['message' => $message], $data);
    return response()->json($data, $statusCode);
}


?>
