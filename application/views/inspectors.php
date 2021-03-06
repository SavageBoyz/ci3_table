<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container mainTable">
    <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th>Проверяемый СМП</th>
                <th>Контролирующий орган</th>
                <th>Плановый период проверки от</th>
                <th>Плановый период проверки до</th>
                <th>Плановая длительность</th>
                <th>Действия</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach($inspectors as $value) :?>
                <tr>
                    <td> <?= $value->Id_ins; ?> </td>
                    <td> <?= $value->TitleS; ?> </td>
                    <td> <?= $value->TitleA; ?> </td>
                    <td> <?= $value->DateFr; ?> </td>
                    <td> <?= $value->DateTo; ?> </td>
                    <td> <?= $value->Duration; ?> </td>
                    <td> К1 К2 </td>
                </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                <th>Проверяемый СМП</th>
                <th>Контролирующий орган</th>
                <th>Плановый период проверки от</th>
                <th>Плановый период проверки до</th>
                <th>Плановая длительность</th>
                <th>Действия</th>
                </tr>
            </tfoot>
        </table>
</div>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>