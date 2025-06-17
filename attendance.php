<!DOCTYPE html>
<html>

<head>
    <title>AttendanceSystem</title>
    <style>
        .header {
            background-color: #0000FF;
            color: #FFFFFF;
            text-align: center;
        }

        .note-text {
            color: rgb(53, 194, 53);
            font-size: 0.8em;
        }

        textarea[name="reason"] {
            width: 99%;
            height: 100px;
        }

        .submit {
            text-align: center;
        }

        .center-table {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    $categories = ["遅刻", "早退", "欠席", "慶弔", "その他"];
    $times = ["1限", "2限", "3限", "4限", "5限"];
    $selected_category = "";
    $selected_date = [];
    $selected_times = [];
    $reason_context = "";
    ?>
    <div class="header">
        <h3>【欠席・遅刻連絡】</h3>
    </div>
<form action="result.php" method="POST">
    <table border="1" class="center-table">
        <tbody>
            <tr>
                <th>区分</th>
                <td>
                    <div class="category">
                        <?php foreach ($categories as $category) : ?>
                            <input type="radio" name="category" value="<?php echo htmlspecialchars($category); ?>">
                            <?php echo $category; ?>
                        <?php endforeach; ?>
                        <p class="note-text">※慶弔は過去分も入力可能（年度内）</p>
                    </div>
                </td>
            </tr>

            <tr>
                <th>日付</th>
                <td>
                    <div>
                        <input type="date" name="date_start" value="<?php echo date("Y-m-d"); ?>">
                        <span>〜</span>
                        <input type="date" name="date_end" value="<?php echo date("Y-m-d"); ?>">
                    </div>
                </td>
            </tr>

            <tr>
                <th>時限</th>
                <td>
                    <div>
                        <?php foreach ($times as $time) : ?>
                            <input type="checkbox" name="times[]" value="<?php echo htmlspecialchars($time); ?>">
                            <?php echo $time; ?>
                        <?php endforeach; ?>
                        <p class="note-text">※欠席する時限にチェック</p>
                    </div>
                </td>
            </tr>

            <tr>
                <th>理由</th>
                <td>
                    <textarea name="reason"></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="submit">
                        <input type="submit" value="送信">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    </form>
</body>

</html>