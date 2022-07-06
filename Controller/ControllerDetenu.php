<?php 
    class ControllerDetenu extends ControllerTwig{
        public static function listAllDetenu(){
            $twig = ControllerTwig::twigControl();
            $datas = new ModelDetenu(); 
            $allDetenu = $datas->listDetenu();
            echo $twig->render('detenus.twig', ['detenus' => $allDetenu, 'root' => ROOT]);
        }
        public static function readDetenu($id){
            $twig = ControllerTwig::twigControl();
            $datas = new ModelDetenu();
            $detenu = $datas->select($id);
            echo $twig->render('readDetenu.twig', ['detenu' => $detenu, 'root' => ROOT]);
        }
        public static function listAll(){
            $twig = ControllerTwig::twigControl();
            $datas = new ModelDetenu(); 
            $allDetenu = $datas->listDetenu();
            echo $twig->render('homepage.twig', ['detenus' => $allDetenu, 'root' => ROOT]);
        }
        public static function listCategorie(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('categorie.twig', ['root' => ROOT]);
        }
        public static function listArticles(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('articles.twig', ['root' => ROOT]);
        }
        public static function cryptographie(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('cryptographie.twig', ['root' => ROOT]);
        }
        public static function cryptomonnaie(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('cryptomonnaie.twig', ['root' => ROOT]);
        }
        public static function cyberAttack(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('cyberAttack.twig', ['root' => ROOT]);
        }
        public static function fonctionPc(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('fonctionPc.twig', ['root' => ROOT]);
        }
        public static function googleA(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('googleA.twig', ['root' => ROOT]);
        }
        public static function iot(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('iot.twig', ['root' => ROOT]);
        }
        public static function metaverse(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('metaverse.twig', ['root' => ROOT]);
        }
        public static function noCode(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('noCode.twig', ['root' => ROOT]);
        }
        public static function uxDark(){
            $twig = ControllerTwig::twigControl();
            echo $twig->render('uxDark.twig', ['root' => ROOT]);
        }
    }