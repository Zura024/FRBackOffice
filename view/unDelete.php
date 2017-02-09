<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 09.02.2017
 * Time: 13:04
 */
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
                        <? foreach ($deleted as $page){?>
                            <tr id="delete<?=$page[0]?>">
                                <td><p style="margin-top: 5px"><?=$page[0]?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page[1]?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page[2]?> </p></td>
                                <td><p style="margin-top: 5px"><?=$page[3]?> </p></td>
                                <td><button style="float: right" class="btn btn-success" onclick="unDeleted('<?=$page[0]?>')"> Undelete </button> </td>
                            </tr>
                        <?}?>
                </table>
            </div>
        </div>
    </div>
</div>
