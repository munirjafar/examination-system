<style>
  .data-style{
    text-align: center;
    font-weight: bolder;
    font-size: larger;
    font-style: italic;
    text-transform: uppercase;
    color: darkgrey;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
</style>
<div class="section" id="sections">
    <div class="section-header">
        <h2 class="section-title">Manage Sections</h2>
        <button class="btn btn-primary" id="addSectionBtn">Add New Section</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Section ID</th>
                    <th>Section Name</th>
                    <th>Class</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="sectionsTableBody">
                 <?php if (count($sections)> 0 && !empty($sections)) { ?>
                 <?php }else{ ?>
                       <tr> <td colspan="10" class="data-style">No data found in the database</td> </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>
