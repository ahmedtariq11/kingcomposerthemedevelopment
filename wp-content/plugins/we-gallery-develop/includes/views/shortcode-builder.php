<div id="wtgal-select-gallery" style="display: none;">

    <div class="wtgal-popup-container">

        <h3><?php _e( 'Select a gallery to insert', 'wtgal' ); ?></h3>

        <div class="gallery-select wtgal-div">
            <label for="wtgal-gallery-dropdown" class="label"><?php _e( 'Gallery', 'wtgal' ); ?></label>

            <select name="wtgal_gallery" id="wtgal-gallery-dropdown">
                <?php echo wtgal_get_gallery_dropdown(); ?>
            </select>
        </div>

        <div class="wtgal-div">
            <label for="wtgal-gallery-type" class="label"><?php _e( 'Type', 'wtgal' ); ?></label>

            <select id="wtgal-gallery-type">
                <option value="grid"><?php _e( 'Grid', 'wtgal' ); ?></option>
                <option value="slider"><?php _e( 'Slider', 'wtgal' ); ?></option>
            </select>
        </div>

        <div class="wtgal-div show-if-grid">
            <label for="wtgal-gallery-cols" class="label"><?php _e( 'Columns', 'wtgal' ); ?></label>

            <select id="wtgal-gallery-cols">
                <option value="2"><?php _e( '2 Columns', 'wtgal' ); ?></option>
                <option value="3" selected="selected"><?php _e( '3 Columns', 'wtgal' ); ?></option>
                <option value="4"><?php _e( '4 Columns', 'wtgal' ); ?></option>
                <option value="5"><?php _e( '5 Columns', 'wtgal' ); ?></option>
            </select>
        </div>

        <div class="wtgal-div">
            <label for="wtgal-gallery-link" class="label"><?php _e( 'Link To', 'wtgal' ); ?></label>

            <select id="wtgal-gallery-link">
                <option value="file"><?php _e( 'Media File', 'wtgal' ); ?></option>
                <option value="post"><?php _e( 'Attachment Page', 'wtgal' ); ?></option>
                <option value="none"><?php _e( 'None', 'wtgal' ); ?></option>
            </select>
        </div>

        <div class="wtgal-div show-if-grid">
            <label for="wtgal-gallery-caption" class="label"><?php _e( 'Caption', 'wtgal' ); ?></label>

            <label><input type="radio" name="wtgal-gallery-caption" checked="checked" value="yes"><?php _e( 'Show', 'wtgal' ); ?></label>
            <label><input type="radio" name="wtgal-gallery-caption" value="no"><?php _e( 'Hide', 'wtgal' ); ?></label>
        </div>

        <div class="wtgal-div show-if-slider">
            <label for="wtgal-gallery-title" class="checkbox">
                <input type="checkbox" id="wtgal-gallery-title" value="yes">
                <?php _e( 'Show Title', 'wtgal' ); ?>
            </label>
        </div>

        <div class="wtgal-div show-if-slider">
            <label for="wtgal-gallery-desc" class="checkbox">
                <input type="checkbox" id="wtgal-gallery-desc" value="yes">
                <?php _e( 'Show Description', 'wtgal' ); ?>
            </label>
        </div>

        <div class="wtgal-div show-if-slider">
            <label for="wtgal-gallery-animation" class="label"><?php _e( 'Animation', 'wtgal' ); ?></label>

            <select id="wtgal-gallery-animation">
                <option value="slide"><?php _e( 'Slide', 'wtgal' ); ?></option>
                <option value="fade"><?php _e( 'Fade', 'wtgal' ); ?></option>
            </select>
        </div>

        <div class="wtgal-div show-if-slider">
            <label for="wtgal-gallery-nav" class="label"><?php _e( 'Navigation', 'wtgal' ); ?></label>

            <label><input type="radio" name="wtgal-gallery-nav" checked="checked" value="yes"><?php _e( 'Show', 'wtgal' ); ?></label>
            <label><input type="radio" name="wtgal-gallery-nav" value="no"><?php _e( 'Hide', 'wtgal' ); ?></label>
        </div>

        <div class="wtgal-div show-if-slider">
            <label for="wtgal-gallery-direction" class="label"><?php _e( 'Direction', 'wtgal' ); ?></label>

            <label><input type="radio" name="wtgal-gallery-direction" checked="checked" value="yes"><?php _e( 'Show', 'wtgal' ); ?></label>
            <label><input type="radio" name="wtgal-gallery-direction" value="no"><?php _e( 'Hide', 'wtgal' ); ?></label>
        </div>

        <div class="submit-button wtgal-div">
            <button id="wtgal-gallery-insert" class="button-primary"><?php _e( 'Insert Gallery', 'wtgal' ); ?></button>
            <button id="wtgal-gallery-close" class="button-secondary" style="margin-left: 5px;" onClick="tb_remove();"><?php _e( 'Close', 'wtgal' ); ?></a>
        </div>

    </div>
</div>

<style type="text/css">
    .wtgal-popup-container {
        padding: 15px 0 0 20px;
    }
    .wtgal-div {
        padding: 0 0 10px 0;
        clear: left;
    }
    .wtgal-div label.label {
        float: left;
        width: 15%;
    }

    .wtgal-div label.checkbox {
        width: 100%;
        padding-left: 15%;
    }
</style>