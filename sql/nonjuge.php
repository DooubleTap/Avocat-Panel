																								<div class="form-group form-row">
												<div class="col-12">
													<label>Décision</label>
													<textarea class="form-control" id="infosupp" name="infosupp" rows="6" disabled><?php 	 $sql = "SELECT * FROM `mandat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['information']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?> </textarea>
												</div>

											</div>

													<div class="form-group form-row">
<div class="col-4">
													<label>Verdict</label>
													<input type="text" class="form-control" name="Agent" value="<?php 	 $sql = "SELECT * FROM `mandat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['decision']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?>" disabled>
												</div>
												</div>