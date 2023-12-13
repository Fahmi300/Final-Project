<?php


session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Login terlebih dahulu');
            document.location.href = 'login.php';
            </script>";
    exit;
}


include 'layout/header.php';
?>
    <div class="carousel cs">
        <!-- Carousel item 1 -->
        <div class="carousel-item">
            <div class="class-description">
                <h1>Class Name</h1>
                <div class="teacher">
                    <img src="default-profile.jpg" alt="Teacher Photo">
                    <p>Rully Soelaiman</p>
                </div>
                <div class="assistant">
                    <img src="default-profile.jpg" alt="Assistant Photo">
                    <p>Faudzan Dzikri Rabbani</p>
                </div>
            </div>
                
            <!-- Second Container: Class Material and Assignments -->
            <div class="class-content">
                <div class="container co-kelas">
                    <h2>Class Material</h2>
                    <div class="material-box">
                        <div class="material">
                            <button onclick="window.location.href='material.html'">
                                <h3>Material 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                       
                        <div class="material">
                            <button onclick="window.location.href='material.html'">
                                <h3>Material 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                        <div class="material">
                            <button onclick="window.location.href='material.html'">
                                <h3>Material 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                                            </div>
                    <button id="toggleFormButton">Toggle Form</button>
                    <form id="submissionForm" action="submit-assignment" method="post" enctype="multipart/form-data" class="upload-form" style="display: none;">
                        <input type="file" name="assignmentFile" id="assignmentFile" accept=".pdf,.docx">
                        <button type="submit">Upload Material</button>
                    </form>
                </div>
            </div>

            <div class="class-content">
                <div class="container co-kelas">
                    <h2>Assignments</h2>
                    <div class="material-box">
                        <div class="material">
                            <button onclick="window.location.href='assignment.html'">
                                <h3>assignment 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                       
                        <div class="material">
                            <button onclick="window.location.href='assignment.html'">
                                <h3>Material 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                        <div class="material">
                            <button onclick="window.location.href='material.html'">
                                <h3>Material 1</h3>
                            </button>
                            
                            <p>Description of Material 1</p>
                            <label class="status-label">
                                <input type="checkbox"> Status
                            </label>
                        </div>
                                            </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel item 2 -->
        <div class="carousel-item">
            <div class="carousel-item">
                <div class="class-description">
                    <h1>Class Name</h1>
                    <div class="teacher">
                        <img src="default-profile.jpg" alt="Teacher Photo">
                        <p>Rully Soelaiman</p>
                    </div>
                    <div class="assistant">
                        <img src="default-profile.jpg" alt="Assistant Photo">
                        <p>Faudzan Dzikri Rabbani</p>
                    </div>
                </div>
                    
                <!-- Second Container: Class Material and Assignments -->
                <div class="class-content">
                    <div class="container co-kelas">
                        <h2>Class Material</h2>
                        <div class="material-box">
                            <div class="material">
                                <button>
                                    <h3>Material 1</h3>
                                </button>
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                           
                            <div class="material">
                                <button onclick="window.location.href='material.html'">
                                    <h3>Material 1</h3>
                                </button>
                                
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                            <div class="material">
                                <button>
                                    <h3>Material 1</h3>
                                </button>
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                                                </div>
                        <button id="toggleFormButton">Toggle Form</button>
                        <form id="submissionForm" action="submit-assignment" method="post" enctype="multipart/form-data" class="upload-form" style="display: none;">
                            <input type="file" name="assignmentFile" id="assignmentFile" accept=".pdf,.docx">
                            <button type="submit">Upload Material</button>
                        </form>
                    </div>
                </div>
    
                <div class="class-content">
                    <div class="container co-kelas">
                        <h2>Assignments</h2>
                        <div class="material-box">
                            <div class="material">
                                <button onclick="window.location.href='material.html'">
                                    <h3>Material 1</h3>
                                </button>
                                
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                           
                            <div class="material">
                                <button onclick="window.location.href='material.html'">
                                    <h3>Material 1</h3>
                                </button>
                                
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                            <div class="material">
                                <button onclick="window.location.href='material.html'">
                                    <h3>Material 1</h3>
                                </button>
                                
                                <p>Description of Material 1</p>
                                <label class="status-label">
                                    <input type="checkbox"> Status
                                </label>
                            </div>
                                                </div>
                    </div>
                </div>        </div>

        <!-- Add more carousel items as needed -->
    </div>

    <!-- Carousel Controls -->
    <button id="prevBtn">Previous</button>
    <button id="nextBtn">Next</button>

    <script src="class.js"></script>
</body>
</html>
