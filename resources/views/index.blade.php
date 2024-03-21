@extends('layouts.template')

@section('title', 'UI')

@section('content')


  <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        data-bs-whatever="@mdo"
      >
        Nueva Acta
      </button>
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modal-header-2">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Nueva Acta
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label"
                    >Nombre completo del saliente</label
                  >
                  <input type="text" class="form-control" id="recipient-name" />
                </div>
                <label for="recipient-name" class="col-form-label"
                  >cedula
                </label>
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Telefono del saliente</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Telefono del entrante</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Coreo del saliente</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Coreo del entrante</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Gerencia que entrega</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <div class="mb-3">
                  <label for="startDate">Fecha de sucripcion</label>
                  <input
                    type="date"
                    name="date"
                    id="dateIni"
                    value="2024-05-09"
                    min="2016-04-27"
                    max="3000-05-09"
                    class="form-control"
                  />
                  <label for="endDate">Fecha de entrega a la UAI</label>
                  <input
                    type="date"
                    name="date"
                    id="dateFin"
                    value="2018-05-10"
                    min="2016-04-28"
                    max="3000-05-10"
                    class="form-control"
                  />
                </div>
                <label for="endDate">Fecha de cese</label>
                <input
                  type="date"
                  name="date"
                  id="dateFin"
                  value="2018-05-10"
                  min="2016-04-28"
                  max="3000-05-10"
                  class="form-control"
                />
              </form>
            </div>
            <div class="modal-footer-2">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                cerar
              </button>
              <button type="button" class="btn btn-primary">guardar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-4 bg-white">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <table id="datatable_users" class="hover" style="width: 100%">
              <caption>
                Acta de Entrega
              </caption>
              <thead>
                <tr>
            
                  <th class="centered">Codigo de acreditacion </th>
                  <th class="centered">Descricion</th>
                  <th class="centered">Fecha de inicio</th>
                  <th class="centered">Fecha fin </th>
                  <th class="centered">Tipo de atuoria </th>
                  <th class="centered">Tipo de atuacion </th>
                  <th class="centered">Nombre del saliente </th>
                  <th class="centered">Nombre del entrante</th>
                </tr>
              </thead>
              <tbody id="tableBody_users"></tbody>
            </table>
          </div>
        </div>
      </div>
@endsection