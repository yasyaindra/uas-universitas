@extends('layouts.layout')

@section('content')
<div class="container mt-3">
            <h3>Headers</h3>
            <ul>
                <li>
                    <code>Content-Type: application/vnd.api+json</code>
                </li>
                <li>
                    <code>Accept: application/vnd.api+json</code>
                </li>
            </ul>
            <section>
                <h1>Authorization</h1>
                <div class="register-section">
                    <h3 class>Register</h3>
                    <p>POST: <code>/api/register</code></p>
                    <h5>Request: Body</h5>
                    <code>
                        {
                            "name": "John",
                            "email": "john@gmail.com",
                            "password": "password",
                            "password_confirmation": "password"
                        }        
                    </code>
                    <h5>Response</h5>
                    <code>
                        {
                            "status": "Request was successfull",
                            "message": null,
                            "data": {
                                "user": {
                                    "name": "Idris Wahyu",
                                    "email": "idris@gmail.com",
                                    "updated_at": "2023-07-28T06:59:42.000000Z",
                                    "created_at": "2023-07-28T06:59:42.000000Z",
                                    "id": 2
                                },
                                "token": "4|I0c50KTz80TEIFBa1ZY9nUQIqHBvUCOeRooNQcWe"
                            }
                        }
                    </code>
                </div>
                <div class="login-section">
                    <h3>Login</h3>
                    <p>POST: <code>/api/login</code></p>
                    <h5>Request: Body</h5>
                    <code>
                        {
                            "email": "john@gmail.com",
                            "password": "password",
                        }        
                    </code>
                    <h5>Response</h5>
                    <code>
                        {
                            "status": "Request was successfull",
                            "message": null,
                            "data": {
                                "user": {
                                    "id": 2,
                                    "name": "Idris Wahyu",
                                    "email": "idris@gmail.com",
                                    "email_verified_at": null,
                                    "created_at": "2023-07-28T06:59:42.000000Z",
                                    "updated_at": "2023-07-28T06:59:42.000000Z"
                                },
                                "token": "6|zmfz5BaVK2XEqyakkQHWAeUsMnPmiwSnzD1cHklp"
                            }
                        } 
                    </code>
                </div>
            </section>
            <section>
                <h1>Classroom</h1>
                <div class="classroom-section">
                    <h3>All Classroom</h3>
                    <p>GET: <code>/api/classrooms</code></p>
                    <h5>Response</h5>
                    <code>
                        {
                            "data": [
                                {
                                    "id": "1",
                                    "attributes": {
                                        "name": "Apt. 346",
                                        "capacity": 30,
                                        "class_number": "class-2295",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "4",
                                            "name": "Jeramie Abbott MD",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Computer Science",
                                            "minimum": "2.21"
                                        },
                                        "lecturer": {
                                            "name": "Korbin Sauer",
                                            "phone_number": "+1.303.376.3682"
                                        }
                                    }
                                },
                                {
                                    "id": "2",
                                    "attributes": {
                                        "name": "Apt. 281",
                                        "capacity": 30,
                                        "class_number": "class-1213",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "1",
                                            "name": "Dr. Ted Hoeger MD",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Biology",
                                            "minimum": "2.68"
                                        },
                                        "lecturer": {
                                            "name": "Julio Wilkinson",
                                            "phone_number": "+1-984-850-5326"
                                        }
                                    }
                                },
                                {
                                    "id": "3",
                                    "attributes": {
                                        "name": "Suite 547",
                                        "capacity": 30,
                                        "class_number": "class-7887",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "1",
                                            "name": "Dr. Ted Hoeger MD",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Engineering",
                                            "minimum": "3.51"
                                        },
                                        "lecturer": {
                                            "name": "Kiel Kuvalis",
                                            "phone_number": "+1.757.526.8291"
                                        }
                                    }
                                },
                                {
                                    "id": "4",
                                    "attributes": {
                                        "name": "Apt. 853",
                                        "capacity": 30,
                                        "class_number": "class-7036",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "3",
                                            "name": "Morgan Hegmann",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Psychology",
                                            "minimum": "2.92"
                                        },
                                        "lecturer": {
                                            "name": "Kiel Kuvalis",
                                            "phone_number": "+1.757.526.8291"
                                        }
                                    }
                                },
                                {
                                    "id": "5",
                                    "attributes": {
                                        "name": "Suite 863",
                                        "capacity": 30,
                                        "class_number": "class-6847",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "5",
                                            "name": "Casimer Heaney III",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Engineering",
                                            "minimum": "3.51"
                                        },
                                        "lecturer": {
                                            "name": "Korbin Sauer",
                                            "phone_number": "+1.303.376.3682"
                                        }
                                    }
                                },
                                {
                                    "id": "6",
                                    "attributes": {
                                        "name": "Suite 194",
                                        "capacity": 30,
                                        "class_number": "class-5625",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "2",
                                            "name": "Prof. Grady Kulas V",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Business Administration",
                                            "minimum": "3.69"
                                        },
                                        "lecturer": {
                                            "name": "Miller Keeling Sr.",
                                            "phone_number": "(574) 555-9098"
                                        }
                                    }
                                },
                                {
                                    "id": "7",
                                    "attributes": {
                                        "name": "Apt. 629",
                                        "capacity": 30,
                                        "class_number": "class-2056",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "2",
                                            "name": "Prof. Grady Kulas V",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Biology",
                                            "minimum": "2.68"
                                        },
                                        "lecturer": {
                                            "name": "Larue Ziemann",
                                            "phone_number": "985-760-7193"
                                        }
                                    }
                                },
                                {
                                    "id": "8",
                                    "attributes": {
                                        "name": "Apt. 755",
                                        "capacity": 30,
                                        "class_number": "class-4192",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "6",
                                            "name": "Casimer Boyer",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Psychology",
                                            "minimum": "2.92"
                                        },
                                        "lecturer": {
                                            "name": "Mr. Selmer Ward III",
                                            "phone_number": "(754) 686-9397"
                                        }
                                    }
                                },
                                {
                                    "id": "9",
                                    "attributes": {
                                        "name": "Apt. 651",
                                        "capacity": 30,
                                        "class_number": "class-0134",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "7",
                                            "name": "Maxime Thompson MD",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Psychology",
                                            "minimum": "2.92"
                                        },
                                        "lecturer": {
                                            "name": "Golden Tillman",
                                            "phone_number": "+1 (239) 653-2517"
                                        }
                                    }
                                },
                                {
                                    "id": "10",
                                    "attributes": {
                                        "name": "Apt. 075",
                                        "capacity": 30,
                                        "class_number": "class-4098",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "student": {
                                            "id": "3",
                                            "name": "Morgan Hegmann",
                                            "email": ""
                                        },
                                        "major": {
                                            "name": "Psychology",
                                            "minimum": "2.92"
                                        },
                                        "lecturer": {
                                            "name": "Miller Keeling Sr.",
                                            "phone_number": "(574) 555-9098"
                                        }
                                    }
                                }
                            ]
                        }
                    </code>
                </div>
            </section>
            <section>
                <h1>Lecturers</h1>
                <div class="lecturer-section">
                    <h3>All Lecturers</h3>
                    <p>GET: <code>/api/lecturers</code></p>
                    <h5>Response</h5>
                    <code>
                        {
                            "data": [
                                {
                                    "id": "1",
                                    "attributes": {
                                        "name": "Prof. Shawn Altenwerth Sr.",
                                        "phone_number": "651-841-9695"
                                    }
                                },
                                {
                                    "id": "2",
                                    "attributes": {
                                        "name": "Korbin Sauer",
                                        "phone_number": "+1.303.376.3682"
                                    }
                                },
                                {
                                    "id": "3",
                                    "attributes": {
                                        "name": "Timmy Cormier",
                                        "phone_number": "+19863448194"
                                    }
                                },
                                {
                                    "id": "4",
                                    "attributes": {
                                        "name": "Julio Wilkinson",
                                        "phone_number": "+1-984-850-5326"
                                    }
                                },
                                {
                                    "id": "5",
                                    "attributes": {
                                        "name": "Larue Ziemann",
                                        "phone_number": "985-760-7193"
                                    }
                                },
                                {
                                    "id": "6",
                                    "attributes": {
                                        "name": "Golden Tillman",
                                        "phone_number": "+1 (239) 653-2517"
                                    }
                                },
                                {
                                    "id": "7",
                                    "attributes": {
                                        "name": "Miller Keeling Sr.",
                                        "phone_number": "(574) 555-9098"
                                    }
                                },
                                {
                                    "id": "8",
                                    "attributes": {
                                        "name": "Kiel Kuvalis",
                                        "phone_number": "+1.757.526.8291"
                                    }
                                },
                                {
                                    "id": "9",
                                    "attributes": {
                                        "name": "Mr. Selmer Ward III",
                                        "phone_number": "(754) 686-9397"
                                    }
                                },
                                {
                                    "id": "10",
                                    "attributes": {
                                        "name": "Adalberto Cartwright",
                                        "phone_number": "+1-269-778-2704"
                                    }
                                }
                            ]
                        }
                    </code>
                </div>
            </section>
            <section>
                <h1>Students</h1>
                <div class="student-section">
                    <h3>All Students</h3>
                    <p>GET: <code>/api/students</code></p>
                    <h5>Response</h5>
                    <code>
                        {
                            "data": [
                                {
                                    "id": "1",
                                    "attributes": {
                                        "name": "Dr. Ted Hoeger MD",
                                        "gpa": "3.9",
                                        "status": "0",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "3",
                                        "name": "Business Administration",
                                        "minimum_gpa": "3.69"
                                    }
                                },
                                {
                                    "id": "2",
                                    "attributes": {
                                        "name": "Prof. Grady Kulas V",
                                        "gpa": "2.98",
                                        "status": "1",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "2",
                                        "name": "Engineering",
                                        "minimum_gpa": "3.51"
                                    }
                                },
                                {
                                    "id": "3",
                                    "attributes": {
                                        "name": "Morgan Hegmann",
                                        "gpa": "3.46",
                                        "status": "0",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "3",
                                        "name": "Business Administration",
                                        "minimum_gpa": "3.69"
                                    }
                                },
                                {
                                    "id": "4",
                                    "attributes": {
                                        "name": "Jeramie Abbott MD",
                                        "gpa": "3.33",
                                        "status": "0",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "4",
                                        "name": "Psychology",
                                        "minimum_gpa": "2.92"
                                    }
                                },
                                {
                                    "id": "5",
                                    "attributes": {
                                        "name": "Casimer Heaney III",
                                        "gpa": "3.81",
                                        "status": "0",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "5",
                                        "name": "Biology",
                                        "minimum_gpa": "2.68"
                                    }
                                },
                                {
                                    "id": "6",
                                    "attributes": {
                                        "name": "Casimer Boyer",
                                        "gpa": "3.3",
                                        "status": "0",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "3",
                                        "name": "Business Administration",
                                        "minimum_gpa": "3.69"
                                    }
                                },
                                {
                                    "id": "7",
                                    "attributes": {
                                        "name": "Maxime Thompson MD",
                                        "gpa": "2.55",
                                        "status": "1",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "4",
                                        "name": "Psychology",
                                        "minimum_gpa": "2.92"
                                    }
                                },
                                {
                                    "id": "8",
                                    "attributes": {
                                        "name": "Berta Rohan",
                                        "gpa": "2.22",
                                        "status": "1",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "5",
                                        "name": "Biology",
                                        "minimum_gpa": "2.68"
                                    }
                                },
                                {
                                    "id": "9",
                                    "attributes": {
                                        "name": "Weston Lynch",
                                        "gpa": "2.39",
                                        "status": "1",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "3",
                                        "name": "Business Administration",
                                        "minimum_gpa": "3.69"
                                    }
                                },
                                {
                                    "id": "10",
                                    "attributes": {
                                        "name": "Fabian Hayes",
                                        "gpa": "3.82",
                                        "status": "1",
                                        "created_at": "2023-07-27 04:44:45",
                                        "updated_at": "2023-07-27 04:44:45"
                                    },
                                    "relationship": {
                                        "id": "5",
                                        "name": "Biology",
                                        "minimum_gpa": "2.68"
                                    }
                                }
                            ]
                        }
                    </code>
                </div>
            </section>
</div>
@endsection