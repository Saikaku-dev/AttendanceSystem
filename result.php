<!DOCTYPE html>
<html>

<head>
    <title>result</title>
    <style>
        .header {
            background-color:rgb(17, 141, 31);
            color: #FFFFFF;
            text-align: center;
        }
        </style>
</head>

<body>
    <div class="header">
        <h3>【提出結果】</h3>
        </div>
        <?php
        $selected_category = isset($_POST["category"]) ? $_POST["category"] : "未入力";
        $selected_date_start = isset($_POST["date_start"]) ? $_POST["date_start"] : "未入力";
        $selected_date_end = isset($_POST["date_end"]) ? $_POST["date_end"] : "未入力";
        $selected_times = isset($_POST["times"]) ? $_POST["times"] : ["未入力"];
        $selected_reason = isset($_POST["reason"]) ? $_POST["reason"] : "未入力";

        echo "【区分】" . $selected_category . "<br>";
        echo "【期間】" . $selected_date_start . "～" . $selected_date_end . "<br>";
        echo "【時間】" . implode(",", $selected_times) . "<br>";
        echo "【理由】" . $selected_reason . "<br>";
        ?>
</body>

</html>