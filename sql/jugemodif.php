																								<div class="form-group form-row">
												<div class="col-12">
													<label>Décision</label>
													<textarea class="form-control" id="juge" name="juge" rows="6"><?php 	 $sql = "SELECT * FROM `mandat` WHERE `id` = '".$id."'"; if ($res = mysqli_query($link, $sql)) {  if (mysqli_num_rows($res) > 0) {  while ($row = mysqli_fetch_array($res)) {  echo "".$row['juge']."";  }  echo "";   }  else {  }  }  else {  echo "ERROR: Could not able to execute $sql. "                                .mysqli_error($link);  }    ?> </textarea>
												</div>

											</div>

													<div class="form-group form-row">
<div class="col-4">
													<label>Verdict</label>
													<select class="form-control" id="decision" name="decision" required>
														<option selected value="Approuver">Approuver</option>
														<option value="Refuser">Refuser</option>
													</select>
												</div>
												</div>