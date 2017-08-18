<?php 

if ( ! function_exists('dd'))
{
    
    function dd()
    {
        list($callee) = debug_backtrace();

        $args = func_get_args();

        $total_args = func_num_args();

        echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
        echo '<legend style="background:blue; color:white; padding:5px;">'.$callee['file'].' @line: '.$callee['line'].'</legend><pre><code>';

        $i = 0;

        foreach ($args as $arg)
        {
            echo '<strong>Debug #' . ++$i . ' of ' . $total_args . '</strong>: ' . '<br>';

            var_dump($arg);
        }

        echo "</code></pre></fieldset><div><br>";
    }
}

if ( ! function_exists('dc'))
{
function dc()
    {
        list($callee) = debug_backtrace();

        $args = func_get_args();

        $total_args = func_num_args();

        $i = 0;

        foreach ($args as $arg)
        {
            
            echo '<script>';
            echo 'console.log("Debug #' . ++$i . ' of ' . $total_args . '");';
            echo 'console.log('. json_encode( $arg ) .');';
            echo '</script>';
        }

       
    }
}
if ( ! function_exists('pr'))
{
   
    function pr()
    {
        list($callee) = debug_backtrace();

        $args = func_get_args();

        $total_args = func_num_args();

        echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
        echo '<legend style="background:blue; color:white; padding:5px;">'.$callee['file'].' @line: '.$callee['line'].'</legend><pre><code>';

        $i = 0;

        foreach ($args as $arg)
        {
            echo '<strong>Debug #' . ++$i . ' of ' . $total_args . '</strong>: ' . '<br>';

            print_r($arg);
        }

        echo "</code></pre></fieldset><div><br>";
    }
}
