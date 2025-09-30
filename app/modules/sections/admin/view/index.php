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
<div class="section container-fluid" id="sections">
    <div class="section-header">
        <h2 class="section-title">Manage Sections</h2>
        <!-- <button class="btn btn-primary" id="addSectionBtn">Add New Section</button> -->
        <a style="text-decoration: none;" href="?module=sections&action=CreateSection" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Section</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Section ID</th>
                    <th>Section Name</th>
                    <!-- <th>Class</th>
                    <th>Capacity</th> -->
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="sectionsTableBody">
                <?php if (count($sections)> 0 && !empty($sections)): $i = 1;?>
                       <?php foreach ($sections as $key): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                             <td><?= ucfirst($key->section_name) ?></td>  
                             <td><?= ucfirst($key->status) ?></td> 
                             <td><a href="" class="btn btn-primary"><i class="fas fa-pencil"></i></a></td>
                             <td><a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                       <?php endforeach ?>                    
                    <?php else: ?>
                       <tr> <td colspan="10" class="data-style">No data found in the database</td> </tr>
                <?php endif ?>
                    
            </tbody>
        </table>
    </div>
</div>
