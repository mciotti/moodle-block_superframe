import $ from 'jquery';
import notification from 'core/notification';
export const init = (data) => {
    $('#block_superframe_jsskill').click( function() {      
        notification.addNotification({
            message: data.message,
            type: data.type
        });
    });
};