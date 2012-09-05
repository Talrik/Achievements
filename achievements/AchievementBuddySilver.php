<?php

class AchievementBuddySilver implements Achievement {

    public static function hasMetRequirements($user_id) {
        return sizeof(Friends::get($user_id)) >= 10;
    }
    
    public static function getProgress($user_id) {
        return sprintf(sprintf(_("Du hast momentan %s Buddies."), sizeof(Friends::get($user_id))));
    }

    public static function getTitle() {
        return _("Du hast 10 Buddies hinzugef�gt.");
    }

    public static function getDescription() {
        return _("Diese Troph�e erh�lst du, sobald du 10 Buddies hinzugef�gt hast.");
    }
}
