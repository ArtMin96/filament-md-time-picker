import mdtimepicker from '@dmuy/timepicker';

export default function mdTimePicker ({
    statePath,
    ref,
    component,
    okLabel,
    cancelLabel,
    timeFormat = 'hh:mm:ss',
    format = 'hh:mm:ss',
    hourPadding = false,
    clearBtn = false,
    is24hour = false,
}) {
    return {
        statePath: statePath,

        init() {
            mdtimepicker(ref, {
                okLabel: okLabel,
                cancelLabel: cancelLabel,
                timeFormat: timeFormat,
                format: format,
                hourPadding: hourPadding,
                clearBtn: clearBtn,
                is24hour: is24hour,
                events: {
                    timeChanged: function(data, timepicker) {
                        component.set(statePath, data.time);
                    }
                }
            });
        }
    }
};
