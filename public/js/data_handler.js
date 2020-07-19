host = $(location).attr('hostname');
protocol = $(location).attr('protocol');
folder = '';
if (host == 'localhost') {
    folder = '/dromadaire';
} else {
    folder = '/admin';
}
myurl = protocol + '//' + host + folder + '/api/object/';
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
getPermission();
ip = 0;
if ($_GET['action'] == "noteProjet") {
    getNote3();
    $(document).on('submit', "form", function () {
        showPleaseWait();
        var data = $(this).serializeObject();
        data.total = Number(data.faisabilite) + Number(data.apport) + Number(data.originalite) + Number(data.viabilite);
        var form_data = JSON.stringify(data);
        console.log(data.created_by);

        if (ip == 0 && (typeof data.created_by !== 'undefined')) {
            ip++;
            $.ajax({
                url: myurl + "note",
                type: "POST",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    ip = 0;
                    getNote2(data.projet, $id_parent, result.lastId, data.created_by);
                    hidePleaseWait();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });

        }
        return false;
    });
}

if ($_GET['action'] == "noteProjetHack") {
    getNote5();
    $(document).on('submit', "form", function () {
        showPleaseWait();
        var data = $(this).serializeObject();
        data.total = Number(data.innovation) + Number(data.pertinance) + Number(data.faisabilite) + Number(data.impact) + Number(data.livrable) + Number(data.viabilite);
        var form_data = JSON.stringify(data);
        console.log(data.created_by);

        if (ip == 0 && (typeof data.created_by !== 'undefined')) {
            ip++;
            $.ajax({
                url: myurl + "note_hackaton",
                type: "POST",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    ip = 0;
                    getNote4(data.projet, $id_parent, result.lastId, data.created_by);
                    hidePleaseWait();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });

        }
        return false;
    });
}


$('.btn-note').on('click', function () {
    $my_id = $(this).attr('id');
    $id = $("#" + $my_id).next().attr('id');
    $id_parent = $("#" + $my_id).parent().attr('id');
    console.log($id, $id_parent, $my_id);
    $("#" + $my_id).next().toggle();

    $("#" + $id).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            data.total = Number(data.faisabilite) + Number(data.apport) + Number(data.originalite) + Number(data.viabilite);
            var form_data = JSON.stringify(data);
            console.log(form_data);

            if (ip == 0 && (typeof data.created_by !== 'undefined')) {
                ip++;
                $.ajax({
                    url: myurl + "note",
                    type: "POST",
                    contentType: 'application/json',
                    dataType: "json",
                    data: form_data,
                    success: function (result) {
                        ip = 0;
                        console.log(result.lastId);
                        getNote2(data.projet, $id_parent, result.lastId, form_data.created_by);
                        hidePleaseWait();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            //alert('valid');
        }
    });


});
$('.btn-note-edit').on('click', function () {
    moment.locale('fr');

    $my_id = $(this).attr('id');
    $idp = $(this).attr('data-id');
    $("#update_at").val(moment());
    id_projet = $("#" + $my_id).attr('data-kom');
    $id_res = "note-res" + $("#" + $my_id).attr('data-kom');
    $id_form = "form-note" + $("#" + $my_id).attr('data-kom');
    console.log($("#" + $my_id).next().attr('id'), "#" + $my_id);
    $("#" + $id_res).toggle();
    $("#" + $id_form).toggle();

    $("#" + $id_form).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            data.total = Number(data.faisabilite) + Number(data.apport) + Number(data.originalite) + Number(data.viabilite);
            var form_data = JSON.stringify(data);

            console.log(form_data, $idp + " hh");
            $.ajax({
                url: myurl + "note/id_note/" + $idp,
                type: "PUT",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    hidePleaseWait();
                    getNote(id_projet, $id_res, $idp, data.created_by);
                    $("#" + $id_res).toggle();
                    $("#" + $id_form).toggle();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });
            //alert('valid');
        }
    });
});

$('.btn-noteHack').on('click', function () { //Button noteHack
    $my_id = $(this).attr('id');
    $id = $("#" + $my_id).next().attr('id');
    $id_parent = $("#" + $my_id).parent().attr('id');
    console.log($id, $id_parent, $my_id);
    $("#" + $my_id).next().toggle();

    $("#" + $id).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            data.total = Number(data.innovation) + Number(data.pertinance) + Number(data.faisabilite) + Number(data.impact) + Number(data.livrable) + Number(data.viabilite);
            var form_data = JSON.stringify(data);
            console.log(form_data);

            if (ip == 0 && (typeof data.created_by !== 'undefined')) {
                ip++;
                $.ajax({
                    url: myurl + "note_hackaton",
                    type: "POST",
                    contentType: 'application/json',
                    dataType: "json",
                    data: form_data,
                    success: function (result) {
                        ip = 0;
                        console.log(result.lastId, 2);
                        getNote4(data.projet, $id_parent, result.lastId, form_data.created_by);
                        hidePleaseWait();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            //alert('valid');
        }
    });


});

$('.btn-note-editHack').on('click', function () { //Button noteEditHack
    moment.locale('fr');
    console.log("ok");

    $my_id = $(this).attr('id');
    $idp = $(this).attr('data-id');
    $("#update_at").val(moment());
    id_projet = $("#" + $my_id).attr('data-kom');
    $id_res = "note-res" + $("#" + $my_id).attr('data-kom');
    $id_form = "form-note" + $("#" + $my_id).attr('data-kom');
    console.log($("#" + $my_id).next().attr('id'), "#" + $my_id);
    $("#" + $id_res).toggle();
    $("#" + $id_form).toggle();

    $("#" + $id_form).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            data.total = Number(data.innovation) + Number(data.pertinance) + Number(data.faisabilite) + Number(data.impact) + Number(data.livrable) + Number(data.viabilite);
            var form_data = JSON.stringify(data);

            console.log(form_data, $idp + " hh");
            $.ajax({
                url: myurl + "note_hackaton/id_note/" + $idp,
                type: "PUT",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    hidePleaseWait();
                    getNoteHack(id_projet, $id_res, $idp, data.update_by);
                    $("#" + $id_res).toggle();
                    $("#" + $id_form).toggle();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });
            //alert('valid');
        }
    });
});


$('input:checkbox.module_is_checked').each(function (i, v) {
    $mr = getDataWith2Param('module_role', 'module', $(v).val(), 'role_id', $_GET['role']);
    //console.log(v);

    $mr.done(function ($mr) {
        if (!$mr.error) {
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);

    });
});
$('input:checkbox.projet_is_checked').each(function (i, v) {
    $mr = getDataWith2Param('jury_projet', 'projet', $(v).val(), 'jury', $_GET['jury']);
    console.log(v, "project_jury");

    $mr.done(function ($mr) {
        console.log($mr, "project_jury");
        if (!$mr.error) {
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        console.log($mr, "project_jury");
        $(v).attr('checked', false);

    });
});

$('input:checkbox.coach_is_checked').each(function (i, v) {
    $mr = getDataWith2Param('users', 'id', $(v).val(), 'id', $_GET['id']);

    $mr.done(function ($mr) {
        if (!$mr.error) {
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);

    });
});
$('input:checkbox.coach_is_checked_for_valid').each(function (i, v) {
    $mr = getDataWith2Param('users', 'id', $(v).val(), 'status', 1);


    $mr.done(function ($mr) {
        if (!$mr.error) {
            console.log($mr);

            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);

    });
});


function showPleaseWait() {
    if (document.querySelector("#pleaseWaitDialog") == null) {
        var modalLoading = `<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patientez svp...</h4>
                    </div>
                    <div class="modal-body">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
        $(document.body).append(modalLoading);
    }
    $("#pleaseWaitDialog").modal("show");
}

/**
 * Hides "Please wait" overlay. See function showPleaseWait().
 */
function hidePleaseWait() {
    $("#pleaseWaitDialog").modal("hide");
}

function addPermissionRole(chec) {
    $data = "role_id=" + $_GET['role'] + "&module=" + $(chec).val();
    //$data = JSON.stringify($($data).serializeObject());
    $mr = getDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    console.log($data, $mr, "ci");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "module_role",
                    type: "POST",
                    contentType: 'application/json',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "module_role",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    }
}

function addJuryProject(chec) {
    $data = "jury=" + $_GET['jury'] + "&projet=" + $(chec).val() + "&created_by=" + $("#created_by").val();
    //$data = JSON.stringify($($data).serializeObject());
    $mr = getDataWith2Param('jury_projet', 'projet', $(chec).val(), 'jury', $_GET['jury']);
    console.log($data, $mr, "jp");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "jury_projet",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "jury_projet",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('jury_projet', 'projet', $(chec).val(), 'jury', $_GET['jury']);
    }
}

function addCoach(chec) {
    $data = JSON.stringify({
        "status": 1
    });
    //$data = JSON.stringify($($data).serializeObject());
    //$mr = getDataWith2Param('jury_projet', 'projet', $(chec).val(), 'jury', $_GET['jury']);
    $mr = getData('users', 'id', $(chec).val());
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            console.log($data, $mr, "jp");
            if (!$mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "users/id/"+$(chec).val(),
                    type: "PUT",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "users/id/"+$(chec).val(),
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        $data = JSON.stringify({
            "status": 0
        });
        $mr.done(function ($mr) {
            if (!$mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "users/id/"+$(chec).val(),
                    type: "PUT",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "users/id/"+$(chec).val(),
                type: "PUT",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    }
}

function addCoachEquipe(chec) { //Add coach to equipe(projet)
    console.log("equipe", $_GET['equipe']);
    console.log(myurl + "equipe/id_equipe/" + $_GET['equipe'], $(this).prop('checked'));
    $mr = getDataWith2Param('equipe', 'user', $(chec).val(), 'id_equipe', $_GET['equipe']);
    console.log($mr, "coacher");
    if ($(chec).prop('checked') == true) {
        $data = JSON.stringify({
            "user": $(chec).val()
        });
        $.ajax({
            url: myurl + "equipe/id_equipe/" + $_GET['equipe'],
            type: "PUT",
            contentType: 'application/json',
            dataType: "json",
            data: $data,
            success: function (result) {
                console.log(result);
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    } else {
        //deleteDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    }
}

function getModuleRole() {

}

function getPermission() {
    console.log("perm");

    $permision = getDatas('module', 'sub_module', $_GET['module']);
    //console.log("module", $permision);

    $permision.done(function ($permision) {
        if (!$permision.error) {
            $data = '';
            $permision = $permision.data;
            $.each($permision, function (i, v) {
                $data += `
                <tr>
                <td>` + v.name + `</td>
                <td>` + v.description + `</td>
                <td>
                  <a class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
                `;
            });
            $('#body_permission').html($data);
        }
    });
}

function getNote($projet, $id, $idp, $userId) {
    //console.log("perm");

    console.log("projet", $projet);
    $note = getData('note', 'projet', $projet);
    if (typeof $userId !== 'undefined') {
        $note = getDataWith2Param('note', 'projet', $projet, 'created_by', $userId);
    } else {
        $note = getData('note', 'projet', $projet);
    }
    // form_data = JSON.stringify({
    //     "etat_retenu": "Oui"
    // });

    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            if (typeof $userId !== 'undefined') {
                $note = $note.data[0];
            } else {
                $note = $note.data;
            }
            $total = Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            if ($total >= 10) {
                $.ajax({
                    url: myurl + "custom/note_projet/?projet=" + $projet,
                    type: "GET",
                    contentType: 'application/json',
                    dataType: "json",
                    success: function (result) {
                        console.log(result);
                        getNote3();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            $data += '<a href="#">Faisabilité: ' + $note.faisabilite + '/5</a>' +
                '<a href="#">Impact: ' + $note.apport + '/5</a>' +
                '<a href="#">Innovation: ' + $note.originalite + '/5</a>' +
                '<a href="#">Viabilité: ' + $note.viabilite + '/5</a>' +
                '<a href="#"><b>Total: ' + $total + '/20</b></a>';
            $('#' + $id).html($data);
        }
    });
}

function getNote2($projet, $id, $idp, $userId) {
    //console.log("perm");

    $note = getData('note', 'projet', $projet);
    console.log("projet", $projet, $idp);
    if (typeof $userId !== 'undefined') {
        $note = getDataWith2Param('note', 'projet', $projet, 'created_by', $userId);
    } else {
        $note = getData('note', 'projet', $projet);
    }
    //$note = getDataWith2Param('note', 'projet', $projet, 'created_by', $userId);
    // form_data = JSON.stringify({
    //     "etat_retenu": "Oui",
    //     "id_projet": $projet
    // });
    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            console.log($note);

            if (typeof $userId !== 'undefined') {
                $note = $note.data[0];
            } else {
                $note = $note.data;
            }
            $total = Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            if ($total >= 10) {
                $.ajax({
                    url: myurl + "custom/note_projet/?projet=" + $projet,
                    type: "GET",
                    contentType: 'application/json',
                    dataType: "json",
                    success: function (result) {
                        console.log(result);
                        getNote3();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            $data += `
            <li><button id="btn-note-edit-` + $note.projet + `" data-id="` + $note.projet + `" type="button" title="Modifier une note" class="btn btn-note-edit btn-primary center-block"><i class="fa fa-pencil"></i></button></li>
            <br>
            <li id="note-res` + $note.projet + `"><a href="#">Faisabilité: ` + $note.faisabilite + `/5</a>
            <a href="#">Impact: ` + $note.apport + `/5</a>
            <a href="#">Innovation: ` + $note.originalite + `/5</a>
            <a href="#">Viabilité: ` + $note.viabilite + `/5</a>
            <a href="#"><b>Total: ` + $total + `/20</b></a>
            </li>
            <form id="form-note` + $note.projet + `" style="display: none" data-parsley-validate action="" method="post" class="form-horizontal">
                            <li>
                              <div class="form-group">
                                <label for="faisabilite" class="col-lg-4 control-label">Faisabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.faisabilite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="faisabilite" name="faisabilite" placeholder="Faisabilité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="apport" class="col-lg-4 control-label">Impact: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.apport + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="apport" name="apport" placeholder="Impact">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="originalite" class="col-lg-4 control-label">Innovation: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.originalite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="originalite" name="originalite" placeholder="Innovation">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="viabilite" class="col-lg-4 control-label">Viabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.viabilite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="viabilite" name="viabilite" placeholder="Viabilité">
                                  <input type="hidden" value="` + $note.projet + `" data-parsley-required="true" class="form-control" id="projet" name="projet" placeholder="">
                                </div>
                              </div>
                            </li>
                            <li>
                              <button type="submit" class="btn btn-primary">Valider</button>
                            </li>
                          </form>
            `;
            $('#' + $id).html($data);
        }
    });
}

function getNote3() {
    //console.log("perm");


    console.log("projet", myurl + "custom");
    $note = $.ajax({
        url: myurl + "custom/list_project",
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });

    $note.done(function ($note) {
        console.log($note);

        $target = "";
        if (host == "localhost") {
            $target = "http://localhost/Coronackathon/";
        } else {
            $target = "http://coronackathon.org/";
        }
        if (!$note.error) {
            $data = ' <a href="index.php?action=exportToPdf" type="button" class="btn btn-success"><i class="fa fa-download"></i></a>';
            $note = $note.data;
            $.each($note, function (i, $v) {
                $total = Number($v.faisabilite) + Number($v.apport) + Number($v.originalite) + Number($v.viabilite);
                $data += `
            <div class="col-md-6">
            <div style="margin-bottom: 100px; margin-top: 100px" class="card">
              <div class="box">
                <div class="img">
                  <img src="` + $target + $v.file_url + `">
                </div>
                <h2>` + $v.nom_projet + `<br><span>` + $v.domaine + `</span></h2>
                <p> ` + $v.description + `</p>
                <span>
                  <ul id="">
                    <li id="note-res` + $v.projet + `">
                    <a href="#">Faisabilité: ` + $v.faisabilite + `/5</a>
                    <a href="#">Impact: ` + $v.apport + `/5</a>
                    <a href="#">Innovation: ` + $v.originalite + `/5</a>
                    <a href="#">Viabilité: ` + $v.viabilite + `/5</a>
                    <a href="#"><b>Total: ` + $v.total + `/20</b></a>
                    </li>
                    </ul>
                  </span>
                </div>
              </div>
            </div>
            
            `;
            });

            $('#menu1').html($data);
        }
    });
}

function getNote5() {
    //console.log("perm");


    console.log("projet", myurl + "custom");
    $note = $.ajax({
        url: myurl + "custom/list_project",
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });

    $note.done(function ($note) {
        console.log($note);

        $target = "";
        if (host == "localhost") {
            $target = "http://localhost/Coronackathon/";
        } else {
            $target = "http://coronackathon.org/";
        }
        if (!$note.error) {
            $data = ' <a href="index.php?action=exportToPdf" type="button" class="btn btn-success"><i class="fa fa-download"></i></a>';
            $note = $note.data;
            $.each($note, function (i, $v) {
                $total = Number($v.faisabilite) + Number($v.apport) + Number($v.originalite) + Number($v.viabilite);
                console.log($("#roleId").val());
                if ($("#roleId").val() != 6) {
                    
                    $data += '<div class="col-md-12">' +
                        '<div style="margin-bottom: 100px; margin-top: 100px" class="card">' +
                        '<div class="box">' +
                        '<div class="img">' +
                        '<img src="' + $target + $v.file_url + '">' +
                        '</div>' +
                        '<h2>' + $v.nom_projet + '<br><span>' + $v.domaine + '</span></h2>' +
                        '<p> ' + $v.description + '</p>' +
                        '<span>' +
                        '<ul id="">' +
                        '<li id="note-res' + $v.projet + '">' +
                        '<a href="#">Note Final: ' + $v.moyen + '/40</a>' +
                        
                        '</li>' +
                        '</ul>' +
                        '</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                } else {
                    $data += '<div class="col-md-12">' +
                        '<div style="margin-bottom: 100px; margin-top: 100px" class="card">' +
                        '<div class="box">' +
                        '<div class="img">' +
                        '<img src="' + $target + $v.file_url + '">' +
                        '</div>' +
                        '<h2>' + $v.nom_projet + '<br><span>' + $v.domaine + '</span></h2>' +
                        '<p> ' + $v.description + '</p>' +
                        '<span>' +
                        '<ul id="">' +
                        '<li id="note-res' + $v.projet + '">' +
                        '<a href="#">Livrable: ' + $v.livrable + '/5</a>' +
                        '<a href="#">Pertinence: ' + $v.pertinance + '/5</a>' +
                        '<a href="#">Innovation: ' + $v.innovation + '/5</a>' +
                        '<a href="#">Faisabilité: ' + $v.faisabilite + '/15</a>' +
                        '<a href="#">Viabilité: ' + $v.viabilite + '/5</a>' +
                        '<a href="#">Impact: ' + $v.impact + '/5</a>' +
                        '<a href="#"><b>Total: ' + $v.total + '/40</b></a>' +
                        '</li>' +
                        '</ul>' +
                        '</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }


            });

            $('#menu1').html($data);
        }
    });
}

function getNoteHack($projet, $id, $idp, $userId) { //Get NoteHack
    //console.log("perm");

    console.log("projet", $projet, "user", $userId);
    $note = getData('note_hackaton', 'projet', $projet);
    if (typeof $userId !== 'undefined') {
        $note = getDataWith2Param('note_hackaton', 'projet', $projet, 'created_by', $userId);
    } else {
        $note = getData('note_hackaton', 'projet', $projet);
    }
    // form_data = JSON.stringify({
    //     "etat_retenu": "Oui"
    // });

    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            if (typeof $userId !== 'undefined') {
                $note = $note.data[0];
            } else {
                $note = $note.data;
            }
            $total = Number($note.pitch) + Number($note.pertinance) + Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            if ($total >= 10) {
                $.ajax({
                    url: myurl + "custom/note_hackaton_projet/?projet=" + $projet,
                    type: "GET",
                    contentType: 'application/json',
                    dataType: "json",
                    success: function (result) {
                        console.log(result);
                        getNote5();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            $data +=
                '<a href="#">Livrable: ' + $note.livrable + '/5</a>' +
                '<a href="#">Pertinence: ' + $note.pertinance + '/5</a>' +
                '<a href="#">Innovation: ' + $note.innovation + '/5</a>' +
                '<a href="#">Faisabilité: ' + $note.faisabilite + '/15</a>' +
                '<a href="#">Viabilité: ' + $note.viabilite + '/5</a>' +
                '<a href="#">Impact: ' + $note.impact + '/5</a>' +
                '<a href="#"><b>Total: ' + $note.total + '/40</b></a>';
            $('#' + $id).html($data);
        }
    });
}

function getNote4($projet, $id, $idp, $userId) { //Noter projet Hackathon
    //console.log("perm");

    $note = getData('note_hackaton', 'projet', $projet);
    console.log("projet", $projet, $idp);
    if (typeof $userId !== 'undefined') {
        $note = getDataWith2Param('note_hackaton', 'projet', $projet, 'created_by', $userId);
    } else {
        $note = getData('note_hackaton', 'projet', $projet);
    }
    //$note = getDataWith2Param('note', 'projet', $projet, 'created_by', $userId);
    // form_data = JSON.stringify({
    //     "etat_retenu": "Oui",
    //     "id_projet": $projet
    // });
    moment.locale('fr');
    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            console.log($note);

            if (typeof $userId !== 'undefined') {
                $note = $note.data[0];
            } else {
                $note = $note.data;
            }
            $total = Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            if ($total >= 20) {
                $.ajax({
                    url: myurl + "custom/note_hackaton_projet/?projet=" + $projet,
                    type: "GET",
                    contentType: 'application/json',
                    dataType: "json",
                    success: function (result) {
                        console.log(result);
                        getNoteHack();

                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);

                    }
                });
            }
            $data += '<li><button id="btn-note-editHack-' + $note.projet + '" data-kom="' + $note.projet + '"data-id="' + $note.id_note + '" type="button" title="Modifier une note" class="btn btn-note-editHack btn-primary center-block"><i class="fa fa-pencil"></i></button></li>' +
                '<br>' +
                '<li id="note-res' + $note.projet + '">' +
                '<a href="#">Livrable: ' + $note.livrable + '/5</a>' +
                '<a href="#">Pertinence: ' + $note.pertinance + '/5</a>' +
                '<a href="#">Innovation: ' + $note.innovation + '/5</a>' +
                '<a href="#">Faisabilité: ' + $note.faisabilite + '/15</a>' +
                '<a href="#">Viabilité: ' + $note.viabilite + '/5</a>' +
                '<a href="#">Impact: ' + $note.impact + '/5</a>' +
                '<a href="#"><b>Total: ' + $note.total + '/40</b></a>' +
                '</li>' +
                '<form id="form-note' + $note.projet + '" style="display: none" data-parsley-validate action="" method="post" class="form-horizontal">' +

                '<br>' +
                '<div class="form-group">' +
                '<label for="livrable" class="col-lg-6 control-label">PRÉSENTATION DES LIVRABLES /5 </label>' +

                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.livrable + '" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="livrable" name="livrable" placeholder="livrable">' +
                '</div>' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="pertinance" class="col-lg-6 control-label">PERTINENCE DU PROJET /5 </label>' +
                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.pertinance + '" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="pertinance" name="pertinance" placeholder="pertinance">' +
                '</div>' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="innovation" class="col-lg-6 control-label">INNOVATION /5 </label>' +
                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.innovation + '" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="innovation" name="innovation" placeholder="innovation">' +
                '</div>' +
                '</div>' +


                '<div class="form-group">' +
                '<label for="faisabilite" class="col-lg-6 control-label">FAISABILITÉ ET RAPIDITÉ D’ACTION /15 </label>' +
                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.faisabilite + '" data-parsley-min="0" data-parsley-max="15" data-parsley-required="true" class="form-control" id="faisabilite" name="faisabilite" placeholder="faisabilite">' +
                '</div>' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="viabilite" class="col-lg-6 control-label">VIABILITÉ ET SOUTENABILITÉ À LONG-TERME /5 </label>' +
                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.viabilite + '" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="viabilite" name="viabilite" placeholder="Viabilité">' +
                '<input type="hidden" value="' + $note.projet + '" data-parsley-required="true" class="form-control" id="projet" name="projet" placeholder="">' +
                '<input type="hidden" value="' + $('#sessionId').val() + '" data-parsley-required="true" class="form-control" id="update_by" name="update_by" placeholder="">' +
                '<input type="hidden" value="' + moment() + '" data-parsley-required="true" class="form-control" id="update_at" name="update_at" placeholder="">' +
                '</div>' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="impact" class="col-lg-6 control-label">IMPACT SUR LA SOCIÉTÉ ET L’UTILITÉ /5</label>' +
                '<div class="col-lg-6">' +
                '<input type="number" value="' + $note.impact + '" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="impact" name="impact" placeholder="impact">' +
                '</div>' +
                '</div>' +
                '<button type="submit" class="btn btn-primary">Valider</button>' +

                '</form>';

            $('#' + $id).html($data);
        }
    });
}

function setActionUrl(name) {
    arrName = name.split(' ', 2);
    name = arrName[0] + "-" + arrName[1];
    name = name.toLowerCase();
    return name;
}

function addData(table) {
    var go;
    var data = $('#add_permission').serializeObject();
    data.action_url = setActionUrl(data.name);
    var form_data = JSON.stringify(data);

    go = canContinue(data);
    console.log(form_data, $('#add_permission'));
    if (go) {
        $.ajax({
            url: myurl + table,
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result);

                getPermission();
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function addNote() {
    var go;
    var data = $('#add_permission').serializeObject();
    data.action_url = setActionUrl(data.name);
    var form_data = JSON.stringify(data);

    go = canContinue(data);
    console.log(form_data, $('#add_permission'));
    if (go) {
        $.ajax({
            url: myurl + table,
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result);

                getPermission();
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function getData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function getDatas(table, field = null, value = null) {
    console.log(myurl + table + '/' + field + '/' + value + '/?s');

    if (field != null || value != null) {
        return $.ajax({
            url: myurl + table + '/' + field + '/' + value + '/?s',
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp);
                console.log(text, "entexte");

            }
        });
    } else {
        return $.ajax({
            url: myurl + table,
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function getDataWith2Param(table, field, value, $field2, $value2) {
    console.log(myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2);

    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteDataWith2Param(table, field, value, $field2, $value2) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function addTablRow() {
    $tr = `<tr id="addPermission">
    <form >
            <td>
            <div class="form-group">
                <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du module">
            </div>
            </td>
            <td>
            <div class="form-group">
                <input required class="form-control" id="description" name="description" placeholder="description du module">
            </div>
            </td>
            <td>
            <button type="button" onclick="addData('action')" class="btn btn-primary">
                <i class="fa  fa-check-square"></i>
                Valider
            </button>
            </td>
  </tr>`;
    if (!$("#addPermission").length) {
        $('#table_permission').append($tr);
    }
}

function canContinue(data) {
    var go;
    $.each(data, function (i, valueOfElement) {
        if (data[i] == '') {
            go = 'yes';
            $('#danger_content').text('');
            $('#danger_content').append('<p>Tout les champs doivent être rensignés</p>');
            $('#modal-danger').modal('show');
        }
    });
    if (go == 'yes') {
        return false;
    } else {
        return true;
    }
}

function changeEtat(checkbox) {
    $my_etat = $(checkbox).val();
    showPleaseWait();
    console.log(myurl + "inscription/id_inscription/1", $(checkbox).prop('checked'));
    if ($(checkbox).prop('checked') == false) {
        $data = JSON.stringify({
            "etat": "Non"
        });
        $.ajax({
            url: myurl + "inscription/id_inscription/1",
            type: "PUT",
            contentType: 'application/json',
            dataType: "json",
            data: $data,
            success: function (result) {
                console.log(result);
                hidePleaseWait();

            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);

            }
        });
    } else {
        $data = JSON.stringify({
            "etat": "Oui"
        });
        $.ajax({
            url: myurl + "inscription/id_inscription/1",
            type: "PUT",
            contentType: 'application/json',
            dataType: "json",
            data: $data,
            success: function (result) {
                console.log(result);
                hidePleaseWait();
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);

            }
        });
    }
}

getProjectReports();

function getProjectReports() {
    moment.locale('fr');
    $projet = getDatas("custom", "projects_by_date");
    $day = [];
    $count = [];
    $projet.done(function (data) {
        console.log(data, "report");
        $.each(data, function (i, v) {
            console.log(moment(i).format('DD MMMM'), v[0].nb);
            $day.push(moment(i).format('DD MMMM'));
            $count.push(v[0].nb);
        });

        var chartdata = {
            labels: $day,
            datasets: [{
                    label: 'Projets par date',
                    backgroundColor: '#49e2ff',
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: $count
                }

            ]

        };

        var graphTarget = $("#salesChart");

        var barGraph = new Chart(graphTarget, {
            type: 'bar',
            data: chartdata
        });
    });
}
// $('#checkbox_etat').on('change', function () {//Changement de l'etat de l'inscription
//     $my_etat = $(this).val();
//     showPleaseWait();
//     console.log(myurl + "inscription/id_inscription/1",$(this).prop('checked'));
//     if($(this).prop('checked') == false){
//         $data = JSON.stringify({"etat":"Non"});
//         $.ajax({
//             url: myurl + "inscription/id_inscription/1",
//             type: "PUT",
//             contentType: 'application/json',
//             dataType: "json",
//             data: $data,
//             success: function (result) {
//                 console.log(result);
//                 hidePleaseWait();

//             },
//             error: function (xhr, resp, text) {
//                 // show error to console
//                 console.log(xhr, resp, text);

//             }
//         });
//     } else{
//         $data = JSON.stringify({"etat":"Oui"})
//         $.ajax({
//             url: myurl + "inscription/id_inscription/1",
//             type: "PUT",
//             contentType: 'application/json',
//             dataType: "json",
//             data: $data,
//             success: function (result) {
//                 console.log(result);  
//                 hidePleaseWait();              
//             },
//             error: function (xhr, resp, text) {
//                 // show error to console
//                 console.log(xhr, resp, text);

//             }
//         });
//     }
// });