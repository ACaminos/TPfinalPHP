<article class="MainMenu">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Alta Profesores</a></li>
                    <li><a data-toggle="tab" href="#menu1">Baja Profesores</a></li>
                    <li><a data-toggle="tab" href="#menu2">Modificar/Actualizar</a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active"> <!--Primera pestaña-->
                        <h4>En ésta sección usted podrá dar de alta a los nuevos profesores de la institución</h4><br>
                      <div class="container">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                <div class="valid-feedback"></div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Apellido</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback"></div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Documento</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                  Por favor ingrese el Documento
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Sede</label>
                                <select class="custom-select" id="validationCustom04" required>
                                  <option selected disabled value="">...</option>
                                  <option>Avellaneda</option>
                                  <option>Escobar</option>
                                  <option>Chivilcoy</option>
                                  <option>CABA</option>
                                  <option>Saladillo</option>
                                  <option>Hurlingham</option>
                                  <option>Cañuelas</option>
                                  <option>Laferrere</option>
                                  <option>Bridgestone</option>
                                </select>
                                <div class="invalid-feedback">
                                  Por favor, seleccione la sede.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Materia</label>
                                <select class="custom-select" id="validationCustom04" required>
                                  <option selected disabled value="">...</option>
                                  <option>Introducción a la informática</option>
                                  <option>Programación I</option>
                                  <option>Algoritmos y estructura de datos</option>
                                  <option>UML</option>
                                  <option>Programación II</option>
                                  <option>Arquitectura de sistemas</option>
                                  <option>Programación III</option>
                                  <option>Seguridad informática</option>
                                  <option>Sistemas Operativos</option>
                                  <option>Programación IV</option>
                                  <option>Aplicaciones WEB</option>
                                  <option>Tecnología JAVA</option>
                                </select>
                                <div class="invalid-feedback">
                                  Por favor, seleccione la materia.
                                </div>
                              </div>
                            </div><br>
                            <button type="button" class="btn btn-success btn-lg">Dar de alta</button>
                          </form>
                      </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">  <!--Segunda Pestaña-->
                      <h4> <img src="./img/warning.svg" height="30px" width="30px"> ¡Cuidado! En ésta sección usted puede dar de baja definitivamente al profesor <img src="./img/warning.svg" height="30px" width="30px"> </h4>
                      <div class="container">
                        <form class="form-inline">
                          <div class="form-group mb-2">
                            <label for="inputDNI" class="sr-only">Email</label>
                            <input type="text" readonly class="form-control-plaintext" id="" value="Ingrese el documento">
                          </div>
                          <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <input type="search" class="form-control" id="inputDNI">
                          </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                        </form>
                        <hr>
                        <br>
                        <div class="row">
                          <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr class="bg-secondary">
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Apellido</th>
                                  <th scope="col">DNI</th>
                                  <th scope="col">Sede</th>
                                  <th scope="col">Materia</th>
                                  <th scope="col" colspan="2">Acción</th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="menu2" class="tab-pane fade2">  <!--Tercera Pestaña-->
                    <h4> <img src="./img/actualizado.svg" height="30px" width="30px"> Actualización datos del profesor <img src="./img/actualizado.svg" height="30px" width="30px" > </h4>
                      <div class="container">
                        <form class="form-inline">
                          <div class="form-group mb-2">
                            <label for="inputDNI" class="sr-only">DNI</label>
                            <input type="text" readonly class="form-control-plaintext" id="inputDNI" value="Ingrese el documento" name="Actualizar">
                          </div>
                          <div class="form-group mx-sm-3 mb-2">
                            <input type="search" class="form-control" id="search">
                          </div>
                          <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                        </form>
                        <hr>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <table class="table table-hover">
                              <thead>
                                <tr class="bg-secondary">
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Apellido</th>
                                  <th scope="col">DNI</th>
                                  <th scope="col">Sede</th>
                                  <th scope="col">Materia</th>
                                  <th scope="col" colspan="2">Acción</th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </article>