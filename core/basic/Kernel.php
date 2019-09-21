<?php 
namespace core\basic; 
class Kernel { 
    private static $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array; 
    public static function run() { 
        self:: qzqtkcta27e612c68eb6608514f473aa90f3216(); 
        self:: qgtibtqat21879fe189623ca9c42dd27d61bdf963(); 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = self:: ftfatfahkzg767b53b7e46e7415a60dd0cdcdee26d0(); 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = self:: rvqwqzkie642a50c70d2f47635f08df1e8ab9f35($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = self:: rvqugrft4b13f77f767123677fa8d7cff6dfc9fc($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
        $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515 = self:: ftfsqqtccatfac663f72100eb518ecd6c21a67a0a84b6($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
        $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 = self:: vtfsvvatfa379543cc2c9eab255905de1561ddbaec($tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515); 
        self:: qgtibgnn361c20dd89b2fc049c7f03e24cc0b0ec(); 
        self:: qgtibgkfvgqqtvddcb5de2ae16263bee3e1198dadb5d02($qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3); 
    } 
    private static function ftfatfahkzg767b53b7e46e7415a60dd0cdcdee26d0() { 
        if (isset($_SERVER['PATH_INFO']) && ! mb_check_encoding($_SERVER['PATH_INFO'], 'UTF-8')) { 
            $_SERVER['PATH_INFO'] = mb_convert_encoding($_SERVER['PATH_INFO'], 'utf-8', 'GBK'); 
        } 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = ''; 
        if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']) { 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = $_SERVER['PATH_INFO']; 
        } elseif (isset($_SERVER["REDIRECT_URL"]) && $_SERVER["REDIRECT_URL"]) { 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = str_replace('/' . basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['REDIRECT_URL']); 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = str_replace(SITE_DIR, '', $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
            $_SERVER['PATH_INFO'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info; 
        } 
        if (! $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info) { 
            if (isset($_GET['p']) && $_GET['p']) { 
                $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = $_GET['p']; 
            } elseif (isset($_GET['s']) && $_GET['s']) { 
                $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = $_GET['s']; 
            } 
        } 
        define('CORE_VERSION', Config::get('core_version')); 
        define('APP_VERSION', Config::get('app_version')); 
        define('RELEASE_TIME', Config::get('release_time')); 
        if ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info) { 
            $vtfftvk144d8c85a33d8a8876c9761c279bbc39 = '{^\/?([\w\-\/\.' . Config::get('url_allow_char') . ']+?)?\/?$}'; 
            if (preg_match($vtfftvk144d8c85a33d8a8876c9761c279bbc39, $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info)) { 
                $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = preg_replace($vtfftvk144d8c85a33d8a8876c9761c279bbc39, '$1', $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
                $rvq_afnq_crzzzw9b4695306b07c850477c7fdd0cd39182 = Config::get('url_rule_suffix'); 
                if (! ! $vgc0c215df6c5e5f33af869b71d9bd5886a = strripos($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info, $rvq_afnq_crzzzw9b4695306b07c850477c7fdd0cd39182)) { 
                    $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = substr($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info, 0, $vgc0c215df6c5e5f33af869b71d9bd5886a); 
                } 
            } else { 
                $iztce293e5fd729f9b31c944069487ba34f = true; 
            } 
        } 
        if (isset($_SERVER["QUERY_STRING"]) && ! ! $uc56ab8a2231f59764a1ed87a7bafdcfc4 = $_SERVER["QUERY_STRING"]) { 
            if (! mb_check_encoding($uc56ab8a2231f59764a1ed87a7bafdcfc4, 'UTF-8')) { 
                $uc56ab8a2231f59764a1ed87a7bafdcfc4 = mb_convert_encoding($uc56ab8a2231f59764a1ed87a7bafdcfc4, 'UTF-8', 'GBK'); 
            } 
            parse_str($uc56ab8a2231f59764a1ed87a7bafdcfc4, $grfvrfe4012e418df2f8eb166dbda5f588d082); 
            $vtfftvk144d8c85a33d8a8876c9761c279bbc391 = '{^\/?([\x{4e00}-\x{9fa5}\w\-\/\.\s\|:=,@\?%，。；《》—' . Config::get('url_allow_char') . ']+?)?\/?$}u'; 
            $oazft_qzcff702b1471cf95b62cb854ae46fdc1f9f = array( 'nsukey', 'form', 'isappinstalled' ); 
            foreach ($grfvrfe4012e418df2f8eb166dbda5f588d082 as $hte41b47bbcb2895e3285689874abfdab82 => $ytqrt3839a233dc66521b794a911a66b50959) { 
                if (! in_array($hte41b47bbcb2895e3285689874abfdab82, $oazft_qzcff702b1471cf95b62cb854ae46fdc1f9f) && (! preg_match('/^[\w\-\.\/]+$/', $hte41b47bbcb2895e3285689874abfdab82) || ! preg_match($vtfftvk144d8c85a33d8a8876c9761c279bbc391, $ytqrt3839a233dc66521b794a911a66b50959))) { 
                    $iztce293e5fd729f9b31c944069487ba34f = true; 
                    break; 
                } 
            } 
        } 
        if (isset($iztce293e5fd729f9b31c944069487ba34f) && $iztce293e5fd729f9b31c944069487ba34f) { 
            header('HTTP/1.1 404 Not Found'); 
            header('status: 404 Not Found'); 
            $itztkib12fa370529725ad9b57505af4ccae47 = ROOT_PATH . '/defend.html'; 
            if (file_exists($itztkib12fa370529725ad9b57505af4ccae47)) { 
                require $itztkib12fa370529725ad9b57505af4ccae47; 
                exit(); 
            } else { 
                error('您访问路径含有非法字符，防注入系统提醒您请勿尝试非法操作！'); 
            } 
        } 
        define('P', $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
        return $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info; 
    } 
    
    private static function rvqwqzkie642a50c70d2f47635f08df1e8ab9f35($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info) { 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2 = ''; 
        if (! ! $igntzkceb53bd6cf39c11a85afd94016bbda729 = Config::get('app_domain_bind')) { 
            $ctvytv_ktnt57aa5c3e1ff0a50cea01af54bc95ab06 = get_http_host(); 
            if (isset($igntzkceb53bd6cf39c11a85afd94016bbda729[$ctvytv_ktnt57aa5c3e1ff0a50cea01af54bc95ab06])) { 
                $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2 = $igntzkceb53bd6cf39c11a85afd94016bbda729[$ctvytv_ktnt57aa5c3e1ff0a50cea01af54bc95ab06]; 
            } 
        } if (defined('URL_BIND')) { 
            if ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2 && URL_BIND != $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2) { 
                error('系统配置的模块域名绑定与入口文件绑定冲突，请核对！'); 
            } else { 
                $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2 = URL_BIND; 
            } 
        } 
        return $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2 ? trim_slash($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2) . '/' . $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info : $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info; 
    } 
    
    private static function rvqugrft4b13f77f767123677fa8d7cff6dfc9fc($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info) { 
        if (! ! $vgrfte7eee832f54ad9798a0e1595c9db49f2 = Config::get('url_route')) { 
            if (! $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info && isset($vgrfte7eee832f54ad9798a0e1595c9db49f2['/'])) { 
                return $vgrfte7eee832f54ad9798a0e1595c9db49f2['/']; 
            } 
            foreach ($vgrfte7eee832f54ad9798a0e1595c9db49f2 as $hte41b47bbcb2895e3285689874abfdab82 => $ytqrt3839a233dc66521b794a911a66b50959) { 
                $hte41b47bbcb2895e3285689874abfdab82 = trim_slash($hte41b47bbcb2895e3285689874abfdab82); 
                $vtf5127c3f7b453fa1f30e14a441d89d51e = "{" . $hte41b47bbcb2895e3285689874abfdab82 . "}i"; 
                if (preg_match($vtf5127c3f7b453fa1f30e14a441d89d51e, $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info)) { 
                    $ytqrt3839a233dc66521b794a911a66b50959 = trim_slash($ytqrt3839a233dc66521b794a911a66b50959); 
                    $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info = preg_replace($vtf5127c3f7b453fa1f30e14a441d89d51e, $ytqrt3839a233dc66521b794a911a66b50959, $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info); 
                    break; 
                } 
            } 
        } 
        return $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info; 
    } 
    
    private static function ftfsqqtccatfac663f72100eb518ecd6c21a67a0a84b6($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info) { 
        $tvvc5954af00036d31b3edcd2d58a2cc498f = Config::get('public_app', true); 
        if ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info) { 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info = trim_slash($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Info); 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array = explode('/', $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_info); 
            self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array; 
            $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count = count($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array); 
            if ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count >= 3) { 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[0]; 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['c'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[1]; 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['f'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[2]; 
            } elseif ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count == 2) { 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[0]; 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['c'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[1]; 
            } elseif ($vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count == 1) { 
                $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'] = $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_array[0]; 
            } 
        } if (! isset($tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'])) { 
            $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'] = $tvvc5954af00036d31b3edcd2d58a2cc498f[0]; 
        } if (! isset($tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['c'])) { 
            $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['c'] = 'Index'; 
        } if (! isset($tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['f'])) { 
            $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['f'] = 'index'; 
        } if (! in_array(strtolower($tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m']), $tvvc5954af00036d31b3edcd2d58a2cc498f)) { 
            error('您访问的模块' . $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515['m'] . '未开放,请核对后重试！'); 
        } 
        return $tqqtcc_vtfa7ac9c3534f0628c4801751ee8bbad515; 
    } 
    
    private static function vtfsvvatfa379543cc2c9eab255905de1561ddbaec($tqqtcc939bc61663bb54c2c96d29e4492b8c15Path) { 
        define('M', strtolower($tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['m'])); 
        define('APP_MODEL_PATH', APP_PATH . '/' . M . '/model'); 
        define('APP_CONTROLLER_PATH', APP_PATH . '/' . M . '/controller'); 
        if (($fvq_izv57fb30b2f7bb987c5ee2660c81790e87 = Config::get('tpl_dir')) && array_key_exists(M, $fvq_izv57fb30b2f7bb987c5ee2660c81790e87)) { 
            if (strpos($fvq_izv57fb30b2f7bb987c5ee2660c81790e87[M], ROOT_PATH) === false) { 
                define('APP_VIEW_PATH', ROOT_PATH . $fvq_izv57fb30b2f7bb987c5ee2660c81790e87[M]); 
            } else { 
                define('APP_VIEW_PATH', $fvq_izv57fb30b2f7bb987c5ee2660c81790e87[M]); 
            } 
        } else { 
            define('APP_VIEW_PATH', APP_PATH . '/' . M . '/view'); 
        } if (strpos($tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['c'], '.') > 0) { 
            $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 = str_replace('.', '/', $tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['c']); 
            $controller = ucfirst(basename($qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3)); 
            $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 = dirname($qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3) . '/' . $controller; 
        } else { 
            $controller = ucfirst($tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['c']); 
            $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 = $controller; 
        } 
        $qqtcc_zzqt_vtfa70f22c4c45ba19e7f9f884009199b2f4 = APP_CONTROLLER_PATH . '/' . $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 . 'Controller.php'; 
        $ctyt_qgkfvgqqtvde72ad9f67260aafbbd138059ab26424 = array( 'List', 'Content', 'About', 'Search', 'Form', 'Message' ); 
        if (M == 'home' && (! file_exists($qqtcc_zzqt_vtfa70f22c4c45ba19e7f9f884009199b2f4) || in_array($controller, $ctyt_qgkfvgqqtvde72ad9f67260aafbbd138059ab26424))) { 
            $controller = 'Index'; 
            $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3 = 'Index'; 
            define('F', $tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['c']); 
            $tiorcffc31ae1a1cce0302a451e314d3126634 = - 1; 
        } else { 
            define('F', $tqqtcc939bc61663bb54c2c96d29e4492b8c15Path['f']); 
            $tiorcffc31ae1a1cce0302a451e314d3126634 = 0; 
        } 
        define('C', $controller); 
        if (isset($_SERVER["REQUEST_URI"])) { 
            define('URL', $_SERVER["REQUEST_URI"]); 
        } else { 
            define('URL', $_SERVER["ORIG_PATH_INFO"] . '?' . $_SERVER["QUERY_STRING"]); 
        } 
        $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count = count(self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array); 
        for ($i = 3 + $tiorcffc31ae1a1cce0302a451e314d3126634; 
        $i < $vtfaad5b0a4c87cac7adf61d91cccaf4a6a2_count; $i = $i + 2) { 
            if (isset(self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array[$i + 1])) { 
                $_GET[self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array[$i]] = self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array[$i + 1]; 
            } else { 
                $_GET[self::$vtfaad5b0a4c87cac7adf61d91cccaf4a6a2Array[$i]] = null; 
            } 
        } 
        return $qgkfvgqqtv_vtfa1f00470d54d5227233e03193177d04d3; 
    } 
    
    private static function qgtibgnn361c20dd89b2fc049c7f03e24cc0b0ec() { 
        Config::get('debug') ? Check::checkAppFile() : ''; 
        if (M == 'api') { 
            if (! ! $czie5450379b7b3025d20a5cfd0d8ff14d2 = request('sid')) { 
                session_id($czie5450379b7b3025d20a5cfd0d8ff14d2); 
                session_start(); 
            } 
            header("Access-Control-Allow-Origin: *"); 
        } else { 
            Check::checkBs(); 
            Check::checkOs(); 
        } if (file_exists(APP_PATH . '/common/function.php')) { 
            require APP_PATH . '/common/function.php'; 
        } 
        $tvv_qgkzzf560334f081b65a8a0d3aafee489dc6d4 = APP_PATH . '/' . M . '/config/config.php'; 
        if (file_exists($tvv_qgkzzf560334f081b65a8a0d3aafee489dc6d4)) { 
            Config::assign($tvv_qgkzzf560334f081b65a8a0d3aafee489dc6d4); 
        } 
        $tvv_zrkqfzgka81a32408f8f670b5bb6e2fc12ddbcd4 = APP_PATH . '/' . M . '/function/function.php'; 
        if (file_exists($tvv_zrkqfzgka81a32408f8f670b5bb6e2fc12ddbcd4)) { 
            require $tvv_zrkqfzgka81a32408f8f670b5bb6e2fc12ddbcd4; 
        } 
        if (file_exists(APP_PATH . '/common/' . ucfirst(M) . 'Controller.php')) { 
            $qgnn_qqtcc_ktntb323a681ae85dd58c8daf1a3a7697a98 = '\\app\\common\\' . ucfirst(M) . 'Controller'; 
            $qgnn_qqtccca7b39e4a578ee3570790f1307c270e9 = new $qgnn_qqtcc_ktntb323a681ae85dd58c8daf1a3a7697a98(); 
        } 
    } 
    
    private static function qgtibgkfvgqqtvddcb5de2ae16263bee3e1198dadb5d02($controllerPath) { 
        $qqtcc_zzqt1a017863b0cb5a7398709ca81ce58e79 = $controllerPath . 'Controller.php'; 
        $qqtcc_zzqt_vtfa70f22c4c45ba19e7f9f884009199b2f4 = APP_CONTROLLER_PATH . '/' . $qqtcc_zzqt1a017863b0cb5a7398709ca81ce58e79; 
        $qqtcc_ktnt6869d5384b252735d9e0985819cad654 = '\\app\\' . M . '\\controller\\' . str_replace('/', '\\', $controllerPath) . 'Controller'; 
        $zrkqfzgk_ktnt928ea8060a1f9d12fcd8d192a53e2574 = F; 
        if (! file_exists($qqtcc_zzqt_vtfa70f22c4c45ba19e7f9f884009199b2f4)) { 
            header('HTTP/1.1 404 Not Found'); 
            header('status: 404 Not Found'); 
            $zzqt_10a2aa2033064e0374bc956fca0d18f7404 = ROOT_PATH . '/404.html'; 
            if (file_exists($zzqt_10a2aa2033064e0374bc956fca0d18f7404)) { 
                require $zzqt_10a2aa2033064e0374bc956fca0d18f7404; 
                exit(); 
            } else { 
                error('对不起，您访问的页面类文件不存在，请核对后再试！'); 
            } 
        } if (! class_exists($qqtcc_ktnt6869d5384b252735d9e0985819cad654)) { 
            error('类文件中不存在访问的类名！' . $qqtcc_ktnt6869d5384b252735d9e0985819cad654); 
        } 
        $controller = new $qqtcc_ktnt6869d5384b252735d9e0985819cad654(); 
        if (method_exists($qqtcc_ktnt6869d5384b252735d9e0985819cad654, $zrkqfzgk_ktnt928ea8060a1f9d12fcd8d192a53e2574)) { 
            if (strtolower($qqtcc_ktnt6869d5384b252735d9e0985819cad654) != strtolower($zrkqfzgk_ktnt928ea8060a1f9d12fcd8d192a53e2574)) { 
                $vtfrvk12af6a109b7f05b46a3c455b6e4bdc61 = $controller->$zrkqfzgk_ktnt928ea8060a1f9d12fcd8d192a53e2574(); 
            } else { 
                $vtfrvk12af6a109b7f05b46a3c455b6e4bdc61 = $controller; 
            } 
        } else { 
            if (method_exists($qqtcc_ktnt6869d5384b252735d9e0985819cad654, '_empty')) { 
                $vtfrvk12af6a109b7f05b46a3c455b6e4bdc61 = $controller->_empty(); 
            } else { 
                error('不存在您调用的类或方法' . $zrkqfzgk_ktnt928ea8060a1f9d12fcd8d192a53e2574 . '，可能正在开发中，请耐心等待！'); 
            } 
        } 
        if ($vtfrvk12af6a109b7f05b46a3c455b6e4bdc61 !== null) { 
            print_r($vtfrvk12af6a109b7f05b46a3c455b6e4bdc61); 
            exit(); 
        } 
    } 
    
    private static function qgtibtqat21879fe189623ca9c42dd27d61bdf963() { 
        if (! Config::get('tpl_html_cache') || URL_BIND == 'api' || get('nocache', 'int') == 1) { 
            return; 
        } 
        $qf_qtqatb0f4fead5891f8fcc9fdfef7dd1db15d = RUN_PATH . '/config/' . md5('area') . '.php'; 
        if (! file_exists($qf_qtqatb0f4fead5891f8fcc9fdfef7dd1db15d)) { 
            return; 
        } else { 
            Config::assign($qf_qtqatb0f4fead5891f8fcc9fdfef7dd1db15d); 
        } 
        $qfc450905f378fa1252d1eec8e407635b7d = Config::get('lgs'); 
        if (count($qfc450905f378fa1252d1eec8e407635b7d) > 1) { 
            $igntzk59c2e7d33bcfda7e315306a8cae83451 = get_http_host(); 
            foreach ($qfc450905f378fa1252d1eec8e407635b7d as $ytqrt3839a233dc66521b794a911a66b50959) { 
                if ($ytqrt3839a233dc66521b794a911a66b50959['domain'] == $igntzk59c2e7d33bcfda7e315306a8cae83451) { 
                    cookie('lg', $ytqrt3839a233dc66521b794a911a66b50959['acode']); 
                } 
            } 
        } 
        if (! isset($_COOKIE['lg'])) { 
            $itztrqfaf4ac172f8885a3d02c805b63f875b33 = current(Config::get('lgs')); 
            cookie('lg', $itztrqfaf4ac172f8885a3d02c805b63f875b33['acode']); 
        } 
        $qgkzzf_qtqatc3d4d712009fb9c218aaca990deff397 = RUN_PATH . '/config/' . md5('config') . '.php'; 
        if (! Config::assign($qgkzzf_qtqatc3d4d712009fb9c218aaca990deff397)) { 
            return; 
        } 
        if (Config::get('open_wap') && (is_mobile() || Config::get('wap_domain') == get_http_host())) { 
            $otva2b4ed6ed7de21b4947279f36f520723 = 'wap'; 
        } else { 
            $otva2b4ed6ed7de21b4947279f36f520723 = ''; 
        } 
        $qtqat_zzqte8f2134aadb71b86785dfb87382c0e19 = RUN_PATH . '/cache/' . md5(get_http_url() . $_SERVER["REQUEST_URI"] . cookie('lg') . $otva2b4ed6ed7de21b4947279f36f520723) . '.html'; 
        if (file_exists($qtqat_zzqte8f2134aadb71b86785dfb87382c0e19) && time() - filemtime($qtqat_zzqte8f2134aadb71b86785dfb87382c0e19) < Config::get('tpl_html_cache_time')) { 
            ob_start(); 
            include $qtqat_zzqte8f2134aadb71b86785dfb87382c0e19; 
            $qgkftkfc411953d7f200a7716527bdefe78f55d = ob_get_contents(); 
            ob_end_clean(); 
            if (Config::get('gzip') && ! headers_sent() && extension_loaded("zlib") && strstr($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) { 
                $qgkftkfc411953d7f200a7716527bdefe78f55d = gzencode($qgkftkfc411953d7f200a7716527bdefe78f55d, 6); 
                header("Content-Encoding: gzip"); 
                header("Vary: Accept-Encoding"); 
                header("Content-Length: " . strlen($qgkftkfc411953d7f200a7716527bdefe78f55d)); 
            } 
            echo $qgkftkfc411953d7f200a7716527bdefe78f55d; 
            exit(); 
        } 
    } 
    
    private static function qzqtkcta27e612c68eb6608514f473aa90f3216() { 

        if (defined('URL_BIND') && URL_BIND == 'admin') { 
            return; 
        } 
        $server_host = isset($_SERVER['LOCAL_ADDR']) ? $_SERVER['LOCAL_ADDR'] : $_SERVER['SERVER_ADDR']; 
        if ($server_host == '::1') { 
            $server_host = '127.0.0.1'; 
        } 
        if (filter_var($server_host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) { 
            $zvtvv7785683fc16d0a4a32d138cd31405e06 = explode('.', $server_host); 
            $super_host = array( '127.0.0.1/8', '192.168.0.0/16'); 
            foreach ($super_host as $hte41b47bbcb2895e3285689874abfdab82 => $ytqrt3839a233dc66521b794a911a66b50959) { 
                if (self:: ktfogvhytfqa82f64eb9b0a1ad26289f0c33a4158390($server_host, $ytqrt3839a233dc66521b794a911a66b50959)) { 
                    return; 
                } 
            } 
        } 

        $sn_path = ROOT_PATH . '/sn.html'; 
        if ($local_sn = Config::get('sn', true)) { 
            $server_domain = $_SERVER['HTTP_HOST']; 
            $server_domain_encrypted = strtoupper(substr(md5(substr(sha1($server_domain), 0, 10)), 10, 10)); 
            $server_host_encrypted = strtoupper(substr(md5(substr(sha1($server_host), 0, 15)), 10, 10)); 
            $server_user = Config::get('sn_user'); 
            $server_user_encrypted = strtoupper(substr(md5(substr(sha1($server_user), 0, 20)), 10, 10)); 
            if (! in_array($server_domain_encrypted, $local_sn) && ! in_array($server_host_encrypted, $local_sn) && ! in_array($server_user_encrypted, $local_sn)) { 
                if (file_exists($sn_path)) { 
                    require $sn_path; 
                    exit(); 
                } else { 
                    error('未匹配到本域名有效授权码，请填写到网站后台"全局配置>>配置参数"中。');
                } 
            } 
        } else { 
            if (file_exists($sn_path)) { 
                require $sn_path;
                exit(); 
            } else { 
                error('配置文件中授权码为空，请填写到网站后台"全局配置>>配置参数"中。'); 
            } 
        } 
    } 

    private static function ktfogvhytfqa82f64eb9b0a1ad26289f0c33a4158390($zva94fe8d4554ac3e258d13cd68ecf64d5, $ktfogvh83037e6e295954978ede8d12aa0076b1) { 
        if (strpos($ktfogvh83037e6e295954978ede8d12aa0076b1, '/') > 0) { 
            $ktfogvh83037e6e295954978ede8d12aa0076b1 = explode('/', $ktfogvh83037e6e295954978ede8d12aa0076b1); 
            $ngyt35ec4e41ab38ea93ea895f0cf97e68c5 = 32 - $ktfogvh83037e6e295954978ede8d12aa0076b1[1]; 
            return ((ip2long($zva94fe8d4554ac3e258d13cd68ecf64d5) >> $ngyt35ec4e41ab38ea93ea895f0cf97e68c5) == (ip2long($ktfogvh83037e6e295954978ede8d12aa0076b1[0]) >> $ngyt35ec4e41ab38ea93ea895f0cf97e68c5)); 
        } elseif ($ktfogvh83037e6e295954978ede8d12aa0076b1 == $zva94fe8d4554ac3e258d13cd68ecf64d5) { 
            return true; 
        } else { 
            return false; 
        } 
    } 
} 