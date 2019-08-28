<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $params = [];
    $session_id = session_id();
    $params['allow'] = false;
    if (is_auth()) {
        $params['allow'] = true;
        $params['user'] = get_user();
    }
    $params['count'] = (int)basketCount($session_id);
    switch ($page) {

        case 'login':
            auth($_POST['login'], $_POST['pass']);
            header("Location: /");
            break;

        case 'logout':
            session_destroy();
            setcookie("hash");
            header("Location: /");
            break;

        case 'news':

            $params["news"] = getNews();

            break;

        case 'newspage':
            //пример асинхронного обработчика лайков к новостям
            if ($action=="addlike") {
                //обращаемся к модели и ставим лайк
                $result = addNewsLike($id);
                echo json_encode(["result" => $result]);
            }

            $content = getNewsContent($id);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;

        case 'feedback':

            $params['error'] = "";
            
            doFeedbackAction($params, $action, $id);

            $params['feedback'] = getAllFeedback();

            break;

        case 'catalog':

            $params['goods'] = getAllGoods();
            break;

        case 'item':
            
            addToBasket($session_id, $action, $id);

            $params['good'] = getOneGood($id);
            break;
        case 'basket':

            deleteItem($action, $id);
            placeOrder($action, $session_id);
            $params['goods'] = getItemsFromBasket($session_id);
            break;
        case 'admin':
            
            $params['orders'] = showOrders();
            break;
        case 'order':
            $params['id'] = $action;
            $params['goods'] = getItemsFromBasket($action);
            break;
    }

    return $params;
}





