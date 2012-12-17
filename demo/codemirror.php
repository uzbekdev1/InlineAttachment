<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Textarea Inline Attachment Demo</title>
    </head>
    <body>
        <link href="/socialog/public/vendor/CodeMirror/lib/codemirror.css" media="screen" rel="stylesheet" type="text/css"> 
        <script type="text/javascript" src="/socialog/public/vendor/CodeMirror/lib/codemirror.js"></script>
        <script type="text/javascript" src="/socialog/public/vendor/CodeMirror/lib/util/loadmode.js"></script>

        <textarea id="code" rows="10" cols="50"></textarea>

        <script src="../src/inline-attach.js"></script>
        <script src="../src/codemirror.inline-attach.js"></script>
        <script type="text/javascript">
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                matchBrackets: true,
                indentUnit: 4,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift"
            });
            inlineAttach.attachToCodeMirror(editor);
        </script>
    </body>
</html>