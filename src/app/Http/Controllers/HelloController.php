<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /*
     * __invokeメソッドは、Controllerに対してActionを1:1で紐付ける場合のメソッド
     */
    // http://localhost:10080/sample
    public function __invoke() {
        // ヒアドキュメントでHTMLをレスポンスする
        return <<<EOF
<html>
<body>
TEST 2
</body>
</html>
EOF;
    }
}
