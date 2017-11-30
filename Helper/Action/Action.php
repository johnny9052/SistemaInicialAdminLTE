<?php

/**
 * Contiene el control de las acciones basicas del sistema
 * @author Johnny Alexander Salazar
 * @version 0.1
 */
function ExecuteAction($action, $obj, $dao) {

    switch ($action) {

        /* Transaction CRUD */

        case "save":
            $dao->Save($obj);
            break;

        case "search":
            $dao->Search($obj);
            break;

        case "delete":
            $dao->Delete($obj);
            break;

        case "update":
            $dao->Update($obj);
            break;

        case "list":
            $dao->ListAll($obj,false);
            break;
        
          case "listfilter":
            $dao->ListAll($obj,true);
            break;

        /* END Transaction CRUD */


        /* Other transactions */

        case "reportcsv":
            $dao->ReportCSV($obj);
            break;


        case "register":
            $dao->Register($obj);
            break;

        case "detail":
            $dao->Detail($obj);
            break;


        /* Other transactions */
        case "updatestate":
            $dao->UpdateState($obj);
            break;


        default :
            echo 'No action found';
            break;
    }
}
