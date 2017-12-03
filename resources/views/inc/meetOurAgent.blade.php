            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title text-center" id="exampleModalLabel">{{ $posts->localAgentName }}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        {!! $posts->description !!}
                                      </div>
                                      <div class="modal-footer">
                                          <div class="left-side">
                                              <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Close</button>
                                          </div>
                                          <div class="divider"></div>
                                          <div class="right-side">
                                              <button type="button" class="btn btn-success btn-link">Delete</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
            </div>
