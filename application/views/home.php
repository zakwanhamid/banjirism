
  <section  id="intro">
    <div class="container-lg">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 fw-bold">Banjirism</div>
            <div class="display-5 text-muted">No time for wastage</div>
          </h1>
          <p class="lead">Start small, help the one in need and together we make Malaysia more harmonious. During flood season, try our best to be safe and at the same time, we try to avoid any wastage happening. Stay strong & safe! We take care of Malaysia.</p>
          <a href="#eBantuan" class="btn btn-lg ">Help Now</a>
        </div>
        <div class="col-md-5 text-center d-md-block " >
          <img class="img-fluid shadow rounded-4" src="<?php echo base_url(); ?>assets//flood1.jpg" alt="courts">
        </div>
      </div>
    </div>
  </section>

  <section id="aboutUs">
    <div class="container-lg p-5">
      <div class="md-10 text-md-start shadow" style="background-color: rgba(255, 255, 255, 0.5)">
        <div class="p-5">
          <h1 class="pb-5 text-center"> About Us</h1>
          <p class="px-5 text-justify justify-content-center">During the flood that happened currently in Malaysia, 
            they still using the traditional method which is using pens and papers. This is quite handy because the physical 
            document about the information of the stock may be broken or torn because of the flood or the heavy rain. Other than 
            that, the NGOs cannot identify the current quantity of supplies that are available at certain centers. They need to 
            ask directly or need to call the community centers in order to retrieve the data from the volunteer. This will consume 
            more time rather than they view the stocks online and directly go to community centers that requested supplies. Besides, 
            during the post-flood phase, many people want to volunteer not only in terms of finances but also want to help in terms of 
            energy and supplies but unfortunately, they need to ask around and this may cost more time searching for victims in need.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="eBantuan">
    <div class="container-lg">
        <div class="text-center">
          <h2>e-Bantuan</h2>
          <p class="lead px-5">This is open to public.You can choose weather you want give help or you need help. 
            In the first case, if you want to give help, you can choose weather you want to give in terms of finances, 
            energies and supplies. If you need help, you can choose between energies or supplies pages.</p>
        </div>

        <div class="row my-5 align-items-center justify-content-center g-3">
          
          <div class="col-8 col-lg-4 col-xl-3">
            <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo base_url(); ?>assets/finances.jpg" alt="Finances">
              <div class="card-body text-center py-4">
                <h4 class="card-title">Finances</h4>
                <p class="card-text mx-2">This page shows all the account number of each Non Government Organisation (NGO).
                   If they wan to give help, they can view the account number of the specific NGO and transfer manually.</p>
                <a href="<?php echo base_url('finance/index'); ?>" class="btn btn-outline-primary btn-lg mt-3">Select</a>
              </div>
            </div>
          </div>

          <div class="col-8 col-lg-4 col-xl-3">
            <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo base_url(); ?>assets/energies.jpg" alt="Energies">
              <div class="card-body text-center py-4">
                <h4 class="card-title">Energies</h4>
                <p class="card-text mx-2">This page will display all the helps that available in terms of energies. User that have group and want to post their availability. 
                User who need help, they can contact the volunteers group manually using the contact number given on each post</p>
                <a href="<?php echo base_url('energies/index'); ?>" class="btn btn-outline-primary btn-lg mt-3">Select</a>
              </div>
            </div>
          </div>

          <div class="col-8 col-lg-4 col-xl-3">
            <div class="card border-0 shadow">
              <img class="card-img-top" src="<?php echo base_url(); ?>assets/supplies.jpg" alt="Supplies">
              <div class="card-body text-center py-4">
                <h4 class="card-title">Supplies</h4>
                <p class="card-text mx-2"> This page will display extra supplies that are volunteered to be given out to the victims.
                User who need supplies, they can contact the post owner using the phone number given.</p>
                <a href="<?php echo base_url('supplies/index'); ?>" class="btn btn-outline-primary btn-lg mt-3">Select</a>
              </div>
            </div>
          </div>
        </div>
    </div>

  </section>

  