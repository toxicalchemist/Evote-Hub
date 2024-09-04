<div class="row my-3">  
    <div class="col-12">
        <h3>Elections</h3>
        <table class="table" style= background-image: linear-gradient(to right, #000000, #4D4855);>
            <thead style= background-image: linear-gradient(to right, #000000, #4D4855);>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Election Name</th>
                    <th scope="col"># Candidates</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Ending Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $fetchingData = mysqli_query($db, "SELECT * FROM elections") or die(mysqli_error($db)); 
                    $isAnyElectionAdded = mysqli_num_rows($fetchingData);

                    if($isAnyElectionAdded > 0)
                    {
                        $sno = 1;
                        while($row = mysqli_fetch_assoc($fetchingData))
                        {
                            $election_id = $row['id'];
                ?>
                            <tr style="background-color: #e9ecef;">
                                <td><?php echo $sno++; ?></td>
                                <td><?php echo $row['election_topic']; ?></td>
                                <td><?php echo $row['no_of_candidates']; ?></td>
                                <td><?php echo $row['starting_date']; ?></td>
                                <td><?php echo $row['ending_date']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td> 
                                    <a href="index.php?viewResults=<?php echo $election_id; ?>" class="btn btn-sm btn-success">View Results</a>
                                </td>
                            </tr>
                <?php
                        }
                    } else {
                ?>
                        <tr style="background-color: #e9ecef;"> 
                            <td colspan="7">No election is added yet.</td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>    
        </table>
    </div>
</div>
