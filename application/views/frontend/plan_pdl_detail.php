<div class="bg-pages ">
    <div class="row pad-path">
        <div class="path1-1">
            <span class="font-path-1 underline"><a href="<?php echo site_url('Home'); ?>">หน้าแรก</a></span>
        </div>
        <div class="path2-1">
            <span class="font-path-2 underline"><a href="#">แผนงาน</a></span>
        </div>
    </div>

    <div class="page-center">
        <div class="head-pages">
            <span class="font-pages-head">แผนงานพัฒนาท้องถิ่น</span>
        </div>
    </div>
    <div class="bg-pages-in ">
        <div class="scrollable-container">
            <div class="font-pages-content-head">เรื่อง <?= $rsData->plan_pdl_name; ?></div>
            <div class="pages-content break-word mt-2">
                <span class="font-pages-content-detail"><?= $rsData->plan_pdl_detail; ?></span>
                <a class="font-26" href="<?= $rsData->plan_pdl_link; ?>" target="_blank"><?= $rsData->plan_pdl_link; ?></a>
                <?php if (!empty($rsDoc)) { ?>
                    <span class="font-pages-content-detail">ไฟล์เอกสารเพิ่มเติม</span>
                    <?php foreach ($rsDoc as $doc) { ?>
                        <a class="font-doc" href="<?= base_url('docs/file/' . $doc->plan_pdl_file_doc); ?>" target="_blank"><?= $doc->plan_pdl_file_doc; ?></a>,&nbsp;
                    <?php } ?>
                <?php } ?>
                <?php foreach ($rsImg as $img) { ?>
                    <img class="border-radius34 mb-4 mt-4" src="<?php echo base_url('docs/img/' . $img->plan_pdl_img_img); ?>" width="950px" height="100%">
                <?php } ?>
                <?php foreach ($rsPdf as $file) { ?>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $file->plan_pdl_pdf_download; ?> ครั้ง</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <a onclick="downloadFile(event, <?= $file->plan_pdl_pdf_id; ?>)" href="<?= base_url('docs/file/' . $file->plan_pdl_pdf_pdf); ?>" download>
                                    <img src="<?php echo base_url("docs/k.btn-download.png"); ?>">
                                </a>
                                <script>
                                    function downloadFile(event, plan_pdl_pdf_id) {
                                        // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', '<?= base_url('Pages/increment_download_plan_pdl/'); ?>' + plan_pdl_pdf_id, true);
                                        xhr.send();

                                        // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                        window.open(event.currentTarget.href, '_blank');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text mt-3 mb-5">
                        <object data="<?= base_url('docs/file/' . $file->plan_pdl_pdf_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-start">
                    <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rsData->plan_pdl_view; ?> ครั้ง</span>
                </div>
            </div>
            <div class="col-6">
                <div class="margin-top-delete-topic d-flex justify-content-end">
                    <a href="<?php echo site_url('Pages/plan_pdl'); ?>"><img src="<?php echo base_url("docs/k.btn-back.png"); ?>"></a>
                </div>
            </div>
        </div>
    </div>
</div>