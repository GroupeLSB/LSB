<?php

namespace Lsb\IndicateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $excelObj = $this->get('xls.load_xls2007')->load('c:\test.xlsx');
        
        echo $excelObj->getActiveSheet()->getCell('B8')->getValue();
        
/*        // ask the service for a Excel5
        $excelService = $this->get('xls.service_xls5');
        // or $this->get('xls.service_pdf');
        // or create your own is easy just modify services.yml


        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator("Maarten Balliauw")
                            ->setLastModifiedBy("Maarten Balliauw")
                            ->setTitle("Office 2005 XLSX Test Document")
                            ->setSubject("Office 2005 XLSX Test Document")
                            ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
                            ->setKeywords("office 2005 openxml php")
                            ->setCategory("Test result file");
        $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'Hello')
                    ->setCellValue('B2', 'world!');
        $excelService->excelObj->getActiveSheet()->setTitle('Simple');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $excelService->excelObj->setActiveSheetIndex(0);

        //create the response
        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=stdream2.xls');

        // If you are using a https connection, you have to set those two headers for compatibility with IE <9
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        return $response;        
    }        
        
        
        
//        return $this->render('LsbIndicateursBundle:Default:index.html.twig', array('name' => 'toto'));*/
    }
}
