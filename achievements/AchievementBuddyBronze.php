<?php

class AchievementBuddyBronze implements Achievement {

    public static function hasMetRequirements($user_id) {
        return sizeof(Friends::get($user_id)) > 0;
    }
    
    public static function getProgress($user_id) {
        return sprintf(_("Du hast bisher keinen Buddy hinzugef�gt."));
    }

    public static function getTitle() {
        return _("Du hast einen Buddy hinzugef�gt.");
    }

    public static function getDescription() {
        return _("Diese Troph�e erh�lst du, sobald du einen Buddy hinzugef�gt hast.");
    }
}
