<!-- Exam Questions with Excel Upload -->
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Manage  Questions</h2>
        <div>
            <span class="toggle-label">CA Test</span>
            <label class="toggle-switch">
                <input type="checkbox" id="exam-type-toggle">
                <span class="slider"></span>
            </label>
            <span class="toggle-label">Exam</span>
        </div>
    </div>

    <div class="file-upload">
        <div class="file-upload-icon">
            <i class="fas fa-file-excel"></i>
        </div>
        <h3>Upload Questions via Excel</h3>
        <p>Supported formats: .xlsx, .xls, .csv</p>
        <input type="file" id="question-upload" accept=".xlsx, .xls, .csv" style="display: none;">
        <button class="btn btn-success" onclick="document.getElementById('question-upload').click()">
            <i class="fas fa-upload"></i> Upload Excel File
        </button>
        <div id="question-upload-status" style="margin-top: 15px;"></div>
    </div>

    <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New Question</button>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Subject</th>
                    <th>Type</th>
                    <th>Difficulty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Q1001</td>
                    <td>What is the capital of France?</td>
                    <td>Geography</td>
                    <td>Multiple Choice</td>
                    <td>Easy</td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
                <tr>
                    <td>Q1002</td>
                    <td>Solve for x: 2x + 5 = 15</td>
                    <td>Mathematics</td>
                    <td>Short Answer</td>
                    <td>Medium</td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
                <tr>
                    <td>Q1003</td>
                    <td>Explain the process of photosynthesis</td>
                    <td>Biology</td>
                    <td>Essay</td>
                    <td>Hard</td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
