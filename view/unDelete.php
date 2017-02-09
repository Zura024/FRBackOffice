<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 09.02.2017
 * Time: 13:04
 */
/*print_r($deleted);
die();*/
?>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="height: 735px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="margin: auto">Deleted Pages</h4>
            </div>
            <div class="modal-body" style="height: 660px; overflow-y: scroll ">
                <table class="table table-hover">
                    <tr style="cursor: hand">
                        <td> <strong>Alias</strong> </td>
                        <td> <strong>Ge</strong> </td>
                        <td> <strong>En</strong> </td>
                        <td> <strong>Ru</strong> </td>
                        <td></td>
                    </tr>
                        <? foreach ($deleted as $key=>$page){?>
                            <tr id="delete<?=$page->alias?>">
                                <td><p style="margin-top: 5px"><?=$page->alias?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page->ge?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page->en?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page->ru?> </p></td>
                                <td><button style="float: right" class="btn btn-success" onclick="unDeleted('<?=$page->alias?>')"> Undelete </button> </td>
                            </tr>
                        <?}?>
                </table>
            </div>
        </div>
    </div>
</div>
