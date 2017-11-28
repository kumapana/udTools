<?php
  unlink("../credentials.conf.js");
  $jsfile = fopen("../credentials.conf.js", "a");
  @fwrite($jsfile, "username=\"C0117105\";\nemail=\"c01171055a@edu.teu.ac.jp\";\npassword=\"".$_POST["pass"]."\";\nuri_base=\"http://fire\";\n");
  fclose($jsfile);

  echo htmlspecialchars("パスワードを更新しました。ページをリロードして下さい。");
