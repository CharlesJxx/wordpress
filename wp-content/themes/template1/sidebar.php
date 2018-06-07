<div class="left-sidebar">
    <div class="about-sidebar mb-30">
        <ul class="sidebar">
        <?php wp_list_categories('child_of=');?>  
            <li><a href="about.html"><span class="yellow"><?php the_title();?></span></a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="partners.html">Partners</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="careers.html">Careers</a></li>
        </ul>
    </div><!-- /about-sidebar -->

    <h3 class="mb-20">BROCHURES</h3>
    <ul class="brochure mb-30">
        <li><a href="#"><i class="fa fa-file-pdf-o"></i> &nbsp;Download.Pdf (22 mb)</a></li>
        <li><a href="#"><i class="fa fa-file-text-o"></i> &nbsp;Download.doc (12 mb)</a></li>
        <li><a href="#"><i class="fa fa-file-archive-o"></i> &nbsp;Download.zip (5 mb)</a></li>
    </ul><!-- /brochure -->

    <div class="getquote">
        <h3>GET FREE QUOTE</h3><hr>

        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Your Name*">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Your E-mail*">
            </div>

            <button class="btn-default" type="submit">SUBMIT</button>
        </form>
    </div><!-- /getquote -->
</div>