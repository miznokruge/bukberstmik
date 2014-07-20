<?php
App::uses('AppController', 'Controller');

class KalkulatorController extends AppController {

    //public $uses = array(); //gak pake model

    public function index() {
        $a = 10;
        $b = 20;
        $hasil = $a + $b;
        $this->set('h', $hasil); //1 variabel
        $this->set(compact('a', 'b', 'h'));
    }

    public function hitung() {

        //    if (isset($_POST['submit'])) {
        //   }
//
        $oper = array(
            'tambah', 'kali', 'bagi', 'kurang'
        );

        if ($this->request->is('post')) {
            $data['angka1'] = $this->request->data['kalkulator']['angka1'];
            $data['angka2'] = $this->request->data['kalkulator']['angka2'];

            switch ($oper) {
                case 0:
                    $o = '+';
                    $data['hasil'] = $a1 + $a2;
                    break;
                case 1:
                    $o = '*';
                    $data['hasil'] = $a1 * $a2;
                    break;
                case 2:
                    $o = '/';
                    $data['hasil'] = $a1 / $a2;
                    break;
                case 3:
                    $o = '-';
                    $data['hasil'] = $a1 - $a2;
                    break;
            }
            $simpan = $this->Kalkulator->save($data);
            if ($simpan) {
                $this->redirect(array('action' => 'hitung'));
            } else {
                $this->Session->setFlash('error');
                $this->redirect(array('action' => 'hitung'));
            }
        }

        $this->set('oper', $oper);
    }

}
