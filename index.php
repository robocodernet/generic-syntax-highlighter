<?php

require __DIR__ . '/generic-syntax-highlighter.php';

?><!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>Generic Syntax Highlighter</title>
    <style>
    pre {background:#fff;color:#000;border:1px solid;padding:.5em}
    </style>
  </head>
  <body>
    <pre><code><?php echo SH('&lt;!-- comment --&gt;
&lt;div class="foo" id="bar" title="foo \"bar \\\\\" ba\\\'z qux"&gt;
  &lt;p&gt;lorem ipsum &amp;amp; dolor sit&lt;/p&gt;
&lt;/div&gt;'); ?></code></pre>
    <pre><code><?php echo SH('&lt;!DOCTYPE html&gt;
&lt;html dir="ltr"&gt;
  &lt;head&gt;
    &lt;!-- comment --&gt;
    &lt;title&gt;Test&lt;/title&gt;
    &lt;style&gt;
    #foo {color:red}
    .bar {color:#fff}
    &lt;/style&gt;
    &lt;?php

    # do header ...
    echo do_header($_GET[\'foo\']);

    ?&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;script&gt;
    // inline comment
    function foo(bar) {
        var v = /\s 123 true function\//g;
        var w = <mark>"foo" + 4</mark>;
        var x = true;
        var y = 4 + 5 + 1.5 + .4;
        var z = `&lt;div&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/div&gt;`;
        /**
         * block comment
         */
        return "string" + \'string\' + "string \\" str\\\'ing" + \'string \\\' str\\"ing\' + "" + \'\';
    }
    &lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;'); ?></code></pre>
    <h2>Known Bugs</h2>
    <p>PHP tags in HTML attributes:</p>
    <pre><code><?php echo SH('&lt;article id="post-&lt;?php echo $post-&gt;id; ?&gt;"&gt;'); ?></code></pre>
    <p><em>Currently not targeted for highlighting CSS syntax.</em></p>
  </body>
</html>