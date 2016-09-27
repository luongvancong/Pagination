# Pagination

# Example

    $pagination = new Justin\Pagination\Pagination(100, 12, $_GET['page']);
    echo $pagination->links();