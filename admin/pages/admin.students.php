<!-- Students Management -->
<div class="section" id="students">
    <div class="section-header">
        <h2 class="section-title">Manage Students</h2>
        <button class="btn btn-primary" id="addStudentBtn"><i class="fas fa-plus"></i> Add New Student</button>
    </div>

    <div class="file-upload">
        <div class="file-upload-icon">
            <i class="fas fa-file-excel"></i>
        </div>
        <h3>Upload Student Data via Excel</h3>
        <p>Supported formats: .xlsx, .xls, .csv</p>
        <input type="file" id="student-upload" accept=".xlsx, .xls, .csv" style="display: none;">
        <button class="btn btn-success" onclick="document.getElementById('student-upload').click()">
            <i class="fas fa-upload"></i> Upload Excel File
        </button>
        <div id="student-upload-status" style="margin-top: 15px;"></div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>App Number</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>APP2023001</td>
                    <td>John Smith</td>
                    <td>Grade 10</td>
                    <td>A</td>
                    <td><span style="color: var(--success);">Active</span></td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
                <tr>
                    <td>APP2023002</td>
                    <td>Emma Johnson</td>
                    <td>Grade 10</td>
                    <td>B</td>
                    <td><span style="color: var(--success);">Active</span></td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
                <tr>
                    <td>APP2023003</td>
                    <td>Michael Brown</td>
                    <td>Grade 9</td>
                    <td>A</td>
                    <td><span style="color: var(--danger);">Inactive</span></td>
                    <td class="action-buttons">
                        <div class="btn-icon btn-edit"><i class="fas fa-edit"></i></div>
                        <div class="btn-icon btn-delete"><i class="fas fa-trash"></i></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
