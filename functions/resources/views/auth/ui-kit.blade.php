@extends('layouts.auth.app')

@section('style')
@endsection

@section('body')
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">UI-Kit</li>
            </ol>
        </nav>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>H1 Lorem ipsum dolor sit amet</h1>
                        <h2>H2 Lorem ipsum dolor sit amet</h2>
                        <h3>H3 Lorem ipsum dolor sit amet</h3>
                        <h4>H4 Lorem ipsum dolor sit amet</h4>
                        <h5>H5 Lorem ipsum dolor sit amet</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>H1 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h1>
                        <h2>H2 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h2>
                        <h3>H3 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h3>
                        <h4>H4 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h4>
                        <h5>H5 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><a href="#" class="text-primary">Primary link</a></p>
                        <p><a href="#" class="text-secondary">Secondary link</a></p>
                        <p><a href="#" class="text-success">Success link</a></p>
                        <p><a href="#" class="text-danger">Danger link</a></p>
                        <p><a href="#" class="text-warning">Warning link</a></p>
                        <p><a href="#" class="text-info">Info link</a></p>
                        <p><a href="#" class="text-light bg-dark">Light link</a></p>
                        <p><a href="#" class="text-dark">Dark link</a></p>
                        <p><a href="#" class="text-muted">Muted link</a></p>
                        <p><a href="#" class="text-white bg-dark">White link</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><span class="badge badge-primary">Primary</span></p>
                        <p><span class="badge badge-secondary">Secondary</span></p>
                        <p><span class="badge badge-success">Success</span></p>
                        <p><span class="badge badge-danger">Danger</span></p>
                        <p><span class="badge badge-warning">Warning</span></p>
                        <p><span class="badge badge-info">Info</span></p>
                        <p><span class="badge badge-light">Light</span></p>
                        <p><span class="badge badge-dark">Dark</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn btn-primary">Primary</button></p>
                        <p><button type="button" class="btn btn-secondary">Secondary</button></p>
                        <p><button type="button" class="btn btn-success">Success</button></p>
                        <p><button type="button" class="btn btn-danger">Danger</button></p>
                        <p><button type="button" class="btn btn-warning">Warning</button></p>
                        <p><button type="button" class="btn btn-info">Info</button></p>
                        <p><button type="button" class="btn btn-light">Light</button></p>
                        <p><button type="button" class="btn btn-dark">Dark</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn active btn-primary">Primary (:active)</button></p>
                        <p><button type="button" class="btn active btn-secondary">Secondary (:active)</button></p>
                        <p><button type="button" class="btn active btn-success">Success (:active)</button></p>
                        <p><button type="button" class="btn active btn-danger">Danger (:active)</button></p>
                        <p><button type="button" class="btn active btn-warning">Warning (:active)</button></p>
                        <p><button type="button" class="btn active btn-info">Info (:active)</button></p>
                        <p><button type="button" class="btn active btn-light">Light (:active)</button></p>
                        <p><button type="button" class="btn active btn-dark">Dark (:active)</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn btn-primary" disabled="disabled">Primary (:disabled)</button></p>
                        <p><button type="button" class="btn btn-secondary" disabled="disabled">Secondary (:disabled)</button></p>
                        <p><button type="button" class="btn btn-success" disabled="disabled">Success (:disabled)</button></p>
                        <p><button type="button" class="btn btn-danger" disabled="disabled">Danger (:disabled)</button></p>
                        <p><button type="button" class="btn btn-warning" disabled="disabled">Warning (:disabled)</button></p>
                        <p><button type="button" class="btn btn-info" disabled="disabled">Info (:disabled)</button></p>
                        <p><button type="button" class="btn btn-light" disabled="disabled">Light (:disabled)</button></p>
                        <p><button type="button" class="btn btn-dark" disabled="disabled">Dark (:disabled)</button></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn btn-outline-primary">Primary</button></p>
                        <p><button type="button" class="btn btn-outline-secondary">Secondary</button></p>
                        <p><button type="button" class="btn btn-outline-success">Success</button></p>
                        <p><button type="button" class="btn btn-outline-danger">Danger</button></p>
                        <p><button type="button" class="btn btn-outline-warning">Warning</button></p>
                        <p><button type="button" class="btn btn-outline-info">Info</button></p>
                        <p><button type="button" class="btn btn-outline-light">Light</button></p>
                        <p><button type="button" class="btn btn-outline-dark">Dark</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn active btn-outline-primary">Primary (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-secondary">Secondary (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-success">Success (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-danger">Danger (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-warning">Warning (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-info">Info (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-light">Light (:active)</button></p>
                        <p><button type="button" class="btn active btn-outline-dark">Dark (:active)</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><button type="button" class="btn btn-outline-primary" disabled="disabled">Primary (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-secondary" disabled="disabled">Secondary (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-success" disabled="disabled">Success (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-danger" disabled="disabled">Danger (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-warning" disabled="disabled">Warning (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-info" disabled="disabled">Info (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-light" disabled="disabled">Light (:disabled)</button></p>
                        <p><button type="button" class="btn btn-outline-dark" disabled="disabled">Dark (:disabled)</button></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter text">
                                <label for="exampleInputText1">Text</label>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                <label for="exampleInputEmail1">Email address</label>
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <label for="exampleInputPassword1">Password</label>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="exampleDateInput" placeholder="Date">
                                <label for="exampleDateInput">Date</label>
                            </div>
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" id="exampleDateTimeInput" placeholder="DateTime">
                                <label for="exampleDateTimeInput">DateTime</label>
                            </div>
                            <div class="form-group">
                                <input type="color" class="form-control" id="exampleColorInput" placeholder="Color">
                                <label for="exampleColorInput">Color</label>
                            </div>
                            <div class="form-group">
                                <input type="image" class="form-control" id="exampleImageInput" placeholder="Image">
                                <label for="exampleImageInput">Image</label>
                            </div>
                            <div class="form-group">
                                <input type="month" class="form-control" id="exampleMonthInput" placeholder="Month">
                                <label for="exampleMonthInput">Month</label>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="exampleNumberInput" placeholder="Number">
                                <label for="exampleNumberInput">Number</label>
                            </div>
                            <div class="form-group">
                                <input type="search" class="form-control" id="exampleSearchInput" placeholder="Search">
                                <label for="exampleSearchInput">Search</label>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="exampleTelInput" placeholder="Tel">
                                <label for="exampleTelInput">Tel</label>
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" id="exampleTimeInput" placeholder="Time">
                                <label for="exampleTimeInput">Time</label>
                            </div>
                            <div class="form-group">
                                <input type="url" class="form-control" id="exampleURLInput" placeholder="URL">
                                <label for="exampleURLInput">URL</label>
                            </div>
                            <div class="form-group">
                                <input type="week" class="form-control" id="exampleWeekInput" placeholder="Week">
                                <label for="exampleWeekInput">Week</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <label for="exampleFormControlSelect1">Example select</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
                            <input class="form-control" type="text" placeholder="Disabled input" disabled="disabled">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">Default radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Popup Modal</button>
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p class="text-muted">Some example text that's free-flowing within the dropdown menu.</p>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Collapse</button>
                        <div class="collapse card" id="collapseExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                    2
                                    <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Bootstrap</strong>
                                <small class="text-muted">just now</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                See? Just like this.
                            </div>
                        </div>
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Bootstrap</strong>
                                <small class="text-muted">2 seconds ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Heads up, toasts will stack automatically
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="http://lorempixel.com/1280/400/sports/Responsive-Image" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="http://lorempixel.com/400/200/sports/Rounded-Image" class="rounded" alt="Rounded image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
