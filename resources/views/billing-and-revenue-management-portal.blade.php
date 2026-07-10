@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/Services.aspx?s=26"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUJNzgyMDAxNzI3D2QWAmYPZBYWAgEPFgQeCWlubmVyaHRtbAUWaW5mb0B0ZWNobm9zeXNsYWJzLmNvbR4EaHJlZgUdbWFpbHRvOmluZm9AdGVjaG5vc3lzbGFicy5jb21kAgIPFgIfAAUaR3VydWdyYW0sIEhhcnlhbmEgLSAxMjIwMDJkAgMPFgQfAAUOKzkxIDkyMjA0Mzc2ODIfAQUQdGVsOjkxOTIyMDQzNzY4MmQCBA8WAh8ABcYiPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTEnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0yJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS00Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTcnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS05Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTInPk1vYmlsZSAgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE5Jz5DdXN0b20gV2Vic2l0ZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIwJz5SZXNwb25zaXZlIFdlYnNpdGUgRGVzaWduPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjEnPkUtQ29tbWVyY2UgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMic+V2ViIEFwcGxpY2F0aW9uIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjMnPkFQSSBJbnRlZ3JhdGlvbiBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI0Jz5XZWJzaXRlIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI1Jz5TRU8tRnJpZW5kbHkgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNic+QmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50IFBvcnRhbDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI3Jz5IdW1hbiBSZXNvdXJjZSBNYW5hZ2VtZW50IFN5c3RlbSAoSFJNUyk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yOCc+QXNzZXQgTWFuYWdlbWVudCBTeXN0ZW08L2E+PC9saT48L3VsPjwvbGk+ZAIFDxYCHwAFtAc8bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0zJz5DbGFpbSBNYW5hZ2VtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAgYPFgIfAAWFHTxsaSBpZD0nbWVudS1pdGVtLTEnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTInPlN0cmF0ZWdpYyBPdXRzb3VyY2luZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTMnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS01JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz01Jz5DeWJlciBTZWN1cml0eTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTYnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTcnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS04JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz04Jz5FbnRlcnByaXNlIEFwcGxpY2F0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTEyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEzJz5Dcm9zcy1QbGF0Zm9ybSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNCc+Rmx1dHRlciBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNSc+UmVhY3QgTmF0aXZlIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE2Jz5VSS9VWCBEZXNpZ24gZm9yIE1vYmlsZSBBcHBzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTcnPkFwcCBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48L3VsPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBw8WAh8ABZQGPGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0xJz5CYW5raW5nIGFuZCBGaW5hbmNlPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NCc+UlBBIEltcGxlbWVudGF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAggPZBYCAh0PZBYQAgEPFgIfAAUeQmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50ZAIDDxYCHwAFUUF1dG9tYXRlIGJpbGxpbmcgcHJvY2Vzc2VzIGFuZCBnYWluIHJlYWwtdGltZSB2aXNpYmlsaXR5IGludG8gcmV2ZW51ZSBwZXJmb3JtYW5jZWQCBQ8WAh8ABaMPIDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8L2E+PC9saT5kAgcPFgIfAAXkATxpbWcgZmV0Y2hwcmlvcml0eT0naGlnaCcgZGVjb2Rpbmc9J2FzeW5jJyAgIGhlaWdodD0nNTUwJyBzcmM9J1VwbG9hZC9TZXJ2aWNlcy9iaWxsaW5nIDFhOWMwMjU1My1lOGVjLTQ2Y2QtYTEwZi01MzZlOTgwZjY4NjIucG5nJyBjbGFzcz0nYXR0YWNobWVudC1sYXJnZSBzaXplLWxhcmdlIHdwLWltYWdlLTc3MScgYWx0PScnICBzaXplcz0nKG1heC13aWR0aDoxMDAwcHgpIDUwdncsNTAwcHgnIC8+CWQCCQ8WAh8ABR5CaWxsaW5nIGFuZCBSZXZlbnVlIE1hbmFnZW1lbnRkAgsPFgIfAAXcDDxwPlRoaXMgcHJvamVjdCBpbnZvbHZlZCB0aGUgZGVzaWduIGFuZCBkZXZlbG9wbWVudCBvZiBhIHJvYnVzdCBCaWxsaW5nIGFuZCBSZXZlbnVlIE1hbmFnZW1lbnQgUG9ydGFsIHRvIHN0cmVhbWxpbmUgZmluYW5jaWFsIG9wZXJhdGlvbnMsIGF1dG9tYXRlIGJpbGxpbmcgcHJvY2Vzc2VzLCBhbmQgcHJvdmlkZSByZWFsLXRpbWUgdmlzaWJpbGl0eSBpbnRvIHJldmVudWUgcGVyZm9ybWFuY2UuPC9wPg0KPHA+VGhlIHN5c3RlbSBlbmFibGVzIG9yZ2FuaXphdGlvbnMgdG8gbWFuYWdlIGN1c3RvbWVyIGFjY291bnRzLCBnZW5lcmF0ZSBpbnZvaWNlcywgdHJhY2sgcGF5bWVudHMsIGFuZCBoYW5kbGUgc3Vic2NyaXB0aW9ucyBlZmZpY2llbnRseS4gSXQgc3VwcG9ydHMgbXVsdGlwbGUgYmlsbGluZyBtb2RlbHMsIGluY2x1ZGluZyBvbmUtdGltZSwgcmVjdXJyaW5nLCBhbmQgdXNhZ2UtYmFzZWQgYmlsbGluZywgbWFraW5nIGl0IHN1aXRhYmxlIGZvciBkaXZlcnNlIGJ1c2luZXNzIHJlcXVpcmVtZW50cy48L3A+DQo8ZGl2PjxpbWcgZmV0Y2hwcmlvcml0eT0iaGlnaCIgZGVjb2Rpbmc9ImFzeW5jIiBoZWlnaHQ9IjU1MCIgc3JjPSIuLi93cC1jb250ZW50L2ltYWdlcy9iaWxsaW5nMi5wbmciIGNsYXNzPSJhdHRhY2htZW50LWxhcmdlIHNpemUtbGFyZ2Ugd3AtaW1hZ2UtNzcxIiBhbHQ9IiIgc2l6ZXM9IihtYXgtd2lkdGg6MTAwMHB4KSA1MHZ3LDUwMHB4IiAvPjwvZGl2Pg0KPGg1PiZuYnNwO0tleSBGZWF0dXJlczo8L2g1Pg0KPHA+Jm5ic3A7SW52b2ljZSBnZW5lcmF0aW9uIGFuZCBiaWxsaW5nIGF1dG9tYXRpb24mbmJzcDsgJm5ic3A7PC9wPg0KPHA+Jm5ic3A7U3Vic2NyaXB0aW9uIGFuZCByZWN1cnJpbmcgYmlsbGluZyBtYW5hZ2VtZW50PC9wPg0KPHA+Jm5ic3A7UGF5bWVudCB0cmFja2luZyBhbmQgcmVjb25jaWxpYXRpb24mbmJzcDsgJm5ic3A7PC9wPg0KPHA+Jm5ic3A7Q3VzdG9tZXIgYWNjb3VudCBtYW5hZ2VtZW50ICAmbWlkZG90OzwvcD4NCjxwPiZuYnNwO1JldmVudWUgYW5hbHl0aWNzIGFuZCByZXBvcnRpbmcgZGFzaGJvYXJkJm5ic3A7ICZuYnNwOzwvcD4NCjxwPiZuYnNwO1NlY3VyZSBwYXltZW50IGdhdGV3YXkgaW50ZWdyYXRpb248L3A+DQo8cD4mbmJzcDtSb2xlLWJhc2VkIGFjY2VzcyBhbmQgZGF0YSBzZWN1cml0eTwvcD4NCjxwPiZuYnNwOzwvcD4NCjxkaXY+PGltZyBmZXRjaHByaW9yaXR5PSJoaWdoIiBkZWNvZGluZz0iYXN5bmMiIGhlaWdodD0iNTUwIiBzcmM9Ii4uL3dwLWNvbnRlbnQvaW1hZ2VzL2JpbGxpbmczLnBuZyIgY2xhc3M9ImF0dGFjaG1lbnQtbGFyZ2Ugc2l6ZS1sYXJnZSB3cC1pbWFnZS03NzEiIGFsdD0iIiBzaXplcz0iKG1heC13aWR0aDoxMDAwcHgpIDUwdncsNTAwcHgiIC8+PC9kaXY+DQo8ZGl2PiZuYnNwOzwvZGl2Pg0KPGRpdj4mbmJzcDs8L2Rpdj4NCjxkaXY+PGltZyBmZXRjaHByaW9yaXR5PSJoaWdoIiBkZWNvZGluZz0iYXN5bmMiIGhlaWdodD0iNTUwIiBzcmM9Ii4uL3dwLWNvbnRlbnQvaW1hZ2VzL2JpbGxpbmc0LnBuZyIgY2xhc3M9ImF0dGFjaG1lbnQtbGFyZ2Ugc2l6ZS1sYXJnZSB3cC1pbWFnZS03NzEiIGFsdD0iIiBzaXplcz0iKG1heC13aWR0aDoxMDAwcHgpIDUwdncsNTAwcHgiIC8+PC9kaXY+ZAINDxYCHwAFtyU8c2VjdGlvbiBjbGFzcz0nZWxlbWVudG9yLXNlY3Rpb24gZWxlbWVudG9yLWlubmVyLXNlY3Rpb24gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtODlkZGU0NSBlbGVtZW50b3Itc2VjdGlvbi1ib3hlZCBlbGVtZW50b3Itc2VjdGlvbi1oZWlnaHQtZGVmYXVsdCBlbGVtZW50b3Itc2VjdGlvbi1oZWlnaHQtZGVmYXVsdCcgZGF0YS1pZD0nODlkZGU0NScgZGF0YS1lbGVtZW50X3R5cGU9J3NlY3Rpb24nPiAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbnRhaW5lciBlbGVtZW50b3ItY29sdW1uLWdhcC1kZWZhdWx0Jz48ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29sdW1uIGVsZW1lbnRvci1jb2wtMzMgZWxlbWVudG9yLWlubmVyLWNvbHVtbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC0wNzVkM2UzJyBkYXRhLWlkPScwNzVkM2UzJyBkYXRhLWVsZW1lbnRfdHlwZT0nY29sdW1uJyBzdHlsZSA9J21hcmdpbjowIGF1dG87Jz4gICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LXdyYXAgZWxlbWVudG9yLWVsZW1lbnQtcG9wdWxhdGVkJz4gICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtNjMzYzMyOSBlbGVtZW50b3Itd2lkZ2V0IGVsZW1lbnRvci13aWRnZXQtc2VydmljZScgZGF0YS1pZD0nNjMzYzMyOScgZGF0YS1lbGVtZW50X3R5cGU9J3dpZGdldCcgZGF0YS13aWRnZXRfdHlwZT0nc2VydmljZS5kZWZhdWx0Jz4gICAgICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtY29udGFpbmVyJz4gICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveCBzZXJ2aWNlLXN0eWxlLW5pbmUnPgkgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtY29udGVudCc+CSAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtdGl0bGUnID4JICAgICAgICAgICAgICAgICAgICAgICAgPGgyPkltcHJvdmVkIGJpbGxpbmcgZWZmaWNpZW5jeTwvaDI+CSAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1kZXNjJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPSd0ZXh0LWFsaWduOmp1c3RpZnknPjwvcD4gICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveC1jb250ZW50IC0tPiAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94IC5zZXJ2aWNlLXN0eWxlLW5pbmUgLS0+ICAgICAgICAgICA8L2Rpdj4JICAgIDwvZGl2Pgk8L2Rpdj48L2Rpdj48ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29sdW1uIGVsZW1lbnRvci1jb2wtMzMgZWxlbWVudG9yLWlubmVyLWNvbHVtbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC0wNzVkM2UzJyBkYXRhLWlkPScwNzVkM2UzJyBkYXRhLWVsZW1lbnRfdHlwZT0nY29sdW1uJyBzdHlsZSA9J21hcmdpbjowIGF1dG87Jz4gICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LXdyYXAgZWxlbWVudG9yLWVsZW1lbnQtcG9wdWxhdGVkJz4gICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtNjMzYzMyOSBlbGVtZW50b3Itd2lkZ2V0IGVsZW1lbnRvci13aWRnZXQtc2VydmljZScgZGF0YS1pZD0nNjMzYzMyOScgZGF0YS1lbGVtZW50X3R5cGU9J3dpZGdldCcgZGF0YS13aWRnZXRfdHlwZT0nc2VydmljZS5kZWZhdWx0Jz4gICAgICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtY29udGFpbmVyJz4gICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveCBzZXJ2aWNlLXN0eWxlLW5pbmUnPgkgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtY29udGVudCc+CSAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtdGl0bGUnID4JICAgICAgICAgICAgICAgICAgICAgICAgPGgyPlJlZHVjZWQgbWFudWFsIGVycm9yczwvaDI+CSAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1kZXNjJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPSd0ZXh0LWFsaWduOmp1c3RpZnknPjwvcD4gICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveC1jb250ZW50IC0tPiAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94IC5zZXJ2aWNlLXN0eWxlLW5pbmUgLS0+ICAgICAgICAgICA8L2Rpdj4JICAgIDwvZGl2Pgk8L2Rpdj48L2Rpdj48ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29sdW1uIGVsZW1lbnRvci1jb2wtMzMgZWxlbWVudG9yLWlubmVyLWNvbHVtbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC0wNzVkM2UzJyBkYXRhLWlkPScwNzVkM2UzJyBkYXRhLWVsZW1lbnRfdHlwZT0nY29sdW1uJyBzdHlsZSA9J21hcmdpbjowIGF1dG87Jz4gICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LXdyYXAgZWxlbWVudG9yLWVsZW1lbnQtcG9wdWxhdGVkJz4gICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtNjMzYzMyOSBlbGVtZW50b3Itd2lkZ2V0IGVsZW1lbnRvci13aWRnZXQtc2VydmljZScgZGF0YS1pZD0nNjMzYzMyOScgZGF0YS1lbGVtZW50X3R5cGU9J3dpZGdldCcgZGF0YS13aWRnZXRfdHlwZT0nc2VydmljZS5kZWZhdWx0Jz4gICAgICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtY29udGFpbmVyJz4gICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveCBzZXJ2aWNlLXN0eWxlLW5pbmUnPgkgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtY29udGVudCc+CSAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtdGl0bGUnID4JICAgICAgICAgICAgICAgICAgICAgICAgPGgyPkJldHRlciByZXZlbnVlIHZpc2liaWxpdHkgYW5kIGNvbnRyb2w8L2gyPgkgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtZGVzYycgPgkgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT0ndGV4dC1hbGlnbjpqdXN0aWZ5Jz48L3A+ICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3gtY29udGVudCAtLT4gICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveCAuc2VydmljZS1zdHlsZS1uaW5lIC0tPiAgICAgICAgICAgPC9kaXY+CSAgICA8L2Rpdj4JPC9kaXY+PC9kaXY+ICA8L2Rpdj48L3NlY3Rpb24+PHNlY3Rpb24gY2xhc3M9J2VsZW1lbnRvci1zZWN0aW9uIGVsZW1lbnRvci1pbm5lci1zZWN0aW9uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTg5ZGRlNDUgZWxlbWVudG9yLXNlY3Rpb24tYm94ZWQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQnIGRhdGEtaWQ9Jzg5ZGRlNDUnIGRhdGEtZWxlbWVudF90eXBlPSdzZWN0aW9uJz4gIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb250YWluZXIgZWxlbWVudG9yLWNvbHVtbi1nYXAtZGVmYXVsdCc+PGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbHVtbiBlbGVtZW50b3ItY29sLTMzIGVsZW1lbnRvci1pbm5lci1jb2x1bW4gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtMDc1ZDNlMycgZGF0YS1pZD0nMDc1ZDNlMycgZGF0YS1lbGVtZW50X3R5cGU9J2NvbHVtbicgc3R5bGUgPSdtYXJnaW46MCBhdXRvOyc+ICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC13cmFwIGVsZW1lbnRvci1lbGVtZW50LXBvcHVsYXRlZCc+ICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTYzM2MzMjkgZWxlbWVudG9yLXdpZGdldCBlbGVtZW50b3Itd2lkZ2V0LXNlcnZpY2UnIGRhdGEtaWQ9JzYzM2MzMjknIGRhdGEtZWxlbWVudF90eXBlPSd3aWRnZXQnIGRhdGEtd2lkZ2V0X3R5cGU9J3NlcnZpY2UuZGVmYXVsdCc+ICAgICAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LWNvbnRhaW5lcic+ICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3ggc2VydmljZS1zdHlsZS1uaW5lJz4JICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWNvbnRlbnQnPgkgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LXRpdGxlJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxoMj5TdHJlYW1saW5lZCBmaW5hbmNpYWwgb3BlcmF0aW9uczwvaDI+CSAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1kZXNjJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPSd0ZXh0LWFsaWduOmp1c3RpZnknPjwvcD4gICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveC1jb250ZW50IC0tPiAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94IC5zZXJ2aWNlLXN0eWxlLW5pbmUgLS0+ICAgICAgICAgICA8L2Rpdj4JICAgIDwvZGl2Pgk8L2Rpdj48L2Rpdj4gIDwvZGl2Pjwvc2VjdGlvbj5kAg8PFgIfAAVPV2FudCB0byBsZWFybiBtb3JlIGFib3V0IGhvdyB3ZSBoZWxwIGNsaWVudHMgaW4gQmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50P2QCCQ8WAh4EVGV4dAXTBTxhZGRyZXNzIGNsYXNzPSdjb250YWN0LWluZm8gb2Zmc2V0LXRvcC01MCc+PHA+PHAgc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IG1hcmdpbjogMHB4OyBmb250LWZhbWlseTogTXVsaSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNnB4OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IGZvbnQtc2l6ZTogbWVkaXVtOyI+QWx0RiBHbG9iYWwgQnVzaW5lc3MgUGFyaywgTVIxLCA3dGggRmxvb3IsIFRvd2VyIEQsIE1laHJhdWxpLCBHdXJ1Z3JhbSwgSGFyeWFuYS0xMjIwMDI8L3NwYW4+PC9wPg0KPHAgc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IG1hcmdpbjogMHB4OyBmb250LWZhbWlseTogTXVsaSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNnB4OyI+Jm5ic3A7PC9wPg0KPHAgc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IG1hcmdpbjogMHB4OyBmb250LWZhbWlseTogTXVsaSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNnB4OyI+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IGZvbnQtc2l6ZTogbWVkaXVtOyI+VUsgT2ZmaWNlIEFkZHJlc3M6Jm5ic3A7Jm5ic3A7PC9zcGFuPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPjUxNyBUaGUgQmxlbmhlaW0gQ2VudGVyIFByaW5jZSBSZWdlbnQgUm9hZCwgVFczIDFORCBVSzwvc3Bhbj48L3A+PC9wPmQCCg8WAh8CBTc8ZGw+PGR0PjwvZHQ+IDxkZD5pbmZvQHRlY2hub3N5c2xhYnMuY29tPC9kZD48L2RsPjwvZGw+ZAILDxYCHwIFPzxkbCBjbGFzcz0nb2Zmc2V0LXRvcC0wJz48ZHQ+IDwvZHQ+PGRkPis5MSA5MjIwNDM3NjgyPC9kZD48L2RsPmRktueu5da+7kKkm5mtlQsF8finsuw=" />
                    </div>

                    <script type="text/javascript">
                        //<![CDATA[
                        var theForm = document.forms['Enquiryform'];
                        if (!theForm) {
                            theForm = document.Enquiryform;
                        }

                        function __doPostBack(eventTarget, eventArgument) {
                            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                                theForm.__EVENTTARGET.value = eventTarget;
                                theForm.__EVENTARGUMENT.value = eventArgument;
                                theForm.submit();
                            }
                        }
                        //]]>
                    </script>


                    <script
                        src="WebResource655d.js?d=e8b6j3uDc-gu5-oSf9AB_YWNiCOtGiVvYQsBNm0c25Ec08ibPPMrSPLFdWxyNe8UhO1_-WfUy-i-D3o9CvVYYIaHNF41&amp;t=638901734248157332"
                        type="text/javascript"></script>


                    <script
                        src="ScriptResource5b50.js?d=d4YLUkbWQHj3NAcEIMiXz15hiOxY0Y81_cW9a2G721WPfH_YG8cJzfBidSLKbgEJ08Fh8bu0Y8QYxb2T29pRH1PBjh704XIKOfj3zuYe8T9T0SEcGcJwIuO2bTU5H9-RxQ9DJQlfZaWb0pA1z2EDh767_UA1&amp;t=ffffffff93d1c106"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourcec355.js?d=wLx6-ElG3Yo8Yw4VWZOVUH6gEyXx2ufgGGdf_8_ZOE9XbufVGBaV8MG-t_8vqAlZn_C_fAR4QflHzZFdmvenFlssJ6Ed9-5-31TCHW6yxx0Znzi24Iv7-fI6d4J7_X7IgmS-zQA94r_xIVvcjJL6M1df8Q_movYNzVnQXTcFgSKAkeTT0&amp;t=5c0e0825"
                        type="text/javascript"></script>
                    <script type="text/javascript">
                        //<![CDATA[
                        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
                        //]]>
                    </script>

                    <script
                        src="ScriptResource0d21.js?d=pXjRZo5_ZcT-2ONRqlcMW7sqAhTeztySmGriAYOZaiC7mAn5JV0UmbJSqQdvSjT3Ic3jPKYEWr0NaLL4wiV_XX1BdQOmzStL6tG9gJp_fU_RwcITWK4041sB2JmvgfPevWEjvZxH904TbOv25YVJqzJFknFGF9M51o6gnT5_NgWTmQMx0&amp;t=5c0e0825"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourceea91.axd?d=fW00APDiGngTn7UKtg3EnPiEL_iMqQydP5IjLHF87hsCvEXtVMgHdQ0Etfx8F2vnbWnIE1zBRlPem2ugKzDTXr-S7mK7WMF81fMDSe5B3UaVKEVVllhLHdhkWkf1o6hoKlgPVAhweg_npqfNNLsFZyoevfI1&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourcea4b7.axd?d=9uoiTCzTzgjcKqo5A9mfNKcc4a4a6B0xTi-VZFmGDV9wHNwe17ew1_pcJMq9-JFhnd7ZqB0kCKelnUKsnU6o72uMixTgOICi-i-C7KvHjbWCexYn2ZEexascWVaZE9x_v2HkKRCvJbN5s1_CMDTyeaz1q1E1&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResource979a.axd?d=oqHpJ9jY7a9pJHTD7kp36c1rkUWY_W-FnTH6dqAAd1re0HJdBqoVIcT9IR3cu6UZVpxWTVVumv9HNe_Ckr5tAqe9MAiKXTEcwKTJeodbqXYkrYFglbo8pgcRL0X88te9C3g7gNBMiv_aI4KbGRllwBIbDsa41Vo8hW96eTbwmPR6_DvQidL_xhegoKqdndMPYpme4Q2&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script type="text/javascript">
                        //<![CDATA[
                        function WebForm_OnSubmit() {
                            if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                            return true;
                        }
                        //]]>
                    </script>

                    <div class="aspNetHidden">

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3C6209F6" />
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAAenGdfnCFQabwVT7hQOOXbsD7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2eGRkpSWCuEABZ/DgZ6vISJx3/z5c=" />
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', 'Enquiryform', [], [], [], 90, 'ctl00');
                        //]]>
                    </script>

                    <div>

                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="fname" class="control-label"></label>
                            <input name="ctl00$txtname" type="text" id="txtname" class="form-control"
                                placeholder="Name" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldname" class="small" style="color:White;visibility:hidden;">Please Fill Your
                                Name</span>

                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="mobile" class="control-label"></label>
                            <input name="ctl00$txtmobile" type="text" id="txtmobile" class="form-control" border="0"
                                placeholder="Number" style="border: none; border-bottom: 1px solid white; height: 32px" />

                            <span id="RequiredFieldValidator3" class="small" style="color:White;visibility:hidden;">Please
                                Enter Number</span>

                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="Email" class="control-label"></label>
                            <input name="ctl00$txtmail" type="email" id="txtmail" class="form-control"
                                placeholder="Email" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldemail" class="small" style="color:White;visibility:hidden;">Please Fill
                                Your Email</span>
                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="Message" class="control-label"></label>
                            <input name="ctl00$txtmsg" type="text" id="txtmsg" Border="0" class="form-control"
                                placeholder="Message" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldmsg" class="small" style="color:White;visibility:hidden;">Please Fill Your
                                Message</span>
                        </div>
                        <!--captcha code-->
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">

                            <input type="hidden" name="ctl00$RecaptchaToken" id="RecaptchaToken" />
                        </div>
                        <!--captcha code end-->


                        <div class="form-group">

                            <input type="submit" name="ctl00$Button1" value="Send Message"
                                onclick="return runValidationAndCaptcha();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Button1&quot;, &quot;&quot;, true, &quot;Enquire&quot;, &quot;&quot;, false, false))"
                                id="Button1" class="button button-secondary" class="form-control" type="submit" />
                            <span id="ResultLabel" style="color:Red;"></span>
                            <span id="lblErrorMessage"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            </div>

            <div class="toggle-bg"></div>
        </section>
    </div>
    <div>

        <div class="breadcumb-area" id="service-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="brpt ccase">
                            <h2 id="ContentPlaceHolder1_divhead">Billing and Revenue Management</h2>
                        </div>
                        <div class="breadcumb-inner">
                            <p id="ContentPlaceHolder1_divpara">Automate billing processes and gain real-time
                                visibility into revenue performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="2947" class="elementor elementor-2947">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-f663707 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="f663707" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26eca5a"
                                data-id="26eca5a" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a547048 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="a547048" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1f7e2cd"
                                data-id="1f7e2cd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-016489f menu-service-menu-container elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="016489f" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <div class="menu-service-menu-container">
                                                 @include('layouts.sidebar-services')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d9bd08d service-button elementor-widget elementor-widget-button"
                                        data-id="d9bd08d" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">





                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-796ea77"
                                data-id="796ea77" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cb48409 elementor-widget elementor-widget-image"
                                        data-id="cb48409" data-element_type="widget" data-widget_type="image.default">
                                        <div id="ContentPlaceHolder1_divImg" class="elementor-widget-container"><img
                                                fetchpriority='high' decoding='async' height='550'
                                                src='Upload/Services/billing%201a9c02553-e8ec-46cd-a10f-536e980f6862.png'
                                                class='attachment-large size-large wp-image-771' alt=''
                                                sizes='(max-width:1000px) 50vw,500px' /> </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-0c22889 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="0c22889" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ecc08a8"
                                                data-id="ecc08a8" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4f760ec elementor-widget elementor-widget-heading"
                                                        data-id="4f760ec" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 id="ContentPlaceHolder1_divhead2"
                                                                class="elementor-heading-title elementor-size-default">
                                                                Billing and Revenue Management</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b7e9f36 elementor-widget elementor-widget-text-editor"
                                                        data-id="b7e9f36" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container"
                                                            style="text-align:justify">
                                                            <div id="ContentPlaceHolder1_divContent"
                                                                class="kc-elm kc-css-486867 kc_text_block">
                                                                <p>This project involved the design and development
                                                                    of a robust Billing and Revenue Management
                                                                    Portal to streamline financial operations,
                                                                    automate billing processes, and provide
                                                                    real-time visibility into revenue performance.
                                                                </p>
                                                                <p>The system enables organizations to manage
                                                                    customer accounts, generate invoices, track
                                                                    payments, and handle subscriptions efficiently.
                                                                    It supports multiple billing models, including
                                                                    one-time, recurring, and usage-based billing,
                                                                    making it suitable for diverse business
                                                                    requirements.</p>
                                                                <div><img fetchpriority="high" decoding="async"
                                                                        height="550"
                                                                        src="wp-content/images/billing2.png"
                                                                        class="attachment-large size-large wp-image-771"
                                                                        alt=""
                                                                        sizes="(max-width:1000px) 50vw,500px" />
                                                                </div>
                                                                <h5>&nbsp;Key Features:</h5>
                                                                <p>&nbsp;Invoice generation and billing
                                                                    automation&nbsp; &nbsp;</p>
                                                                <p>&nbsp;Subscription and recurring billing
                                                                    management</p>
                                                                <p>&nbsp;Payment tracking and reconciliation&nbsp;
                                                                    &nbsp;</p>
                                                                <p>&nbsp;Customer account management &middot;</p>
                                                                <p>&nbsp;Revenue analytics and reporting
                                                                    dashboard&nbsp; &nbsp;</p>
                                                                <p>&nbsp;Secure payment gateway integration</p>
                                                                <p>&nbsp;Role-based access and data security</p>
                                                                <p>&nbsp;</p>
                                                                <div><img fetchpriority="high" decoding="async"
                                                                        height="550"
                                                                        src="wp-content/images/billing3.png"
                                                                        class="attachment-large size-large wp-image-771"
                                                                        alt=""
                                                                        sizes="(max-width:1000px) 50vw,500px" />
                                                                </div>
                                                                <div>&nbsp;</div>
                                                                <div>&nbsp;</div>
                                                                <div><img fetchpriority="high" decoding="async"
                                                                        height="550"
                                                                        src="wp-content/images/billing4.png"
                                                                        class="attachment-large size-large wp-image-771"
                                                                        alt=""
                                                                        sizes="(max-width:1000px) 50vw,500px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>


                <!--code for sub-service-heading-->
                <div data-elementor-type="wp-page" data-elementor-id="2937" class="elementor elementor-2937">

                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-cd3e199 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="cd3e199" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                        style="padding:50px 0 50px 0;margin-top:-60px">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4297331"
                                data-id="4297331" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9e43bbb elementor-widget elementor-widget-sectiontitle"
                                        data-id="9e43bbb" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_center">

                                                    <h4 id="our">Our Offerings </h4>


                                                    <h3></h3>


                                                    <h2></span></h2>
                                                    <div class="bar-main">
                                                        <div class="bar bar-big"></div>
                                                    </div>




                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <div id="ContentPlaceHolder1_divSubHeads">
                                        <section
                                            class='elementor-section elementor-inner-section elementor-element elementor-element-89dde45 elementor-section-boxed elementor-section-height-default elementor-section-height-default'
                                            data-id='89dde45' data-element_type='section'>
                                            <div class='elementor-container elementor-column-gap-default'>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Improved billing efficiency</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'></p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Reduced manual errors</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'></p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Better revenue visibility and
                                                                                control</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'></p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class='elementor-section elementor-inner-section elementor-element elementor-element-89dde45 elementor-section-boxed elementor-section-height-default elementor-section-height-default'
                                            data-id='89dde45' data-element_type='section'>
                                            <div class='elementor-container elementor-column-gap-default'>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Streamlined financial operations
                                                                            </h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'></p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!-- end code for sub-service-heading-->

                <div data-elementor-type="wp-page" data-elementor-id="7116" class="elementor elementor-7116">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-deed5ed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="deed5ed" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ad191f"
                                data-id="0ad191f" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-5148247 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5148247" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0736756"
                                data-id="0736756" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-b32ec1c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="b32ec1c" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cea8c2f"
                                                data-id="cea8c2f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-94f6295 elementor-widget elementor-widget-heading"
                                                        data-id="94f6295" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 id="ContentPlaceHolder1_divsomecontent"
                                                                class="elementor-heading-title elementor-size-default">
                                                                Want to learn more about how we help clients in
                                                                Billing and Revenue Management?</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-900b01d"
                                                data-id="900b01d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6b335f6 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                        data-id="6b335f6" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="ContactUs.html">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span class="elementor-button-text">Get
                                                                            Started</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>

    </div>

    <script type="text/javascript">
        //<![CDATA[
        var Page_Validators = new Array(document.getElementById("vldname"), document.getElementById(
            "RequiredFieldValidator3"), document.getElementById("vldemail"), document.getElementById("vldmsg"));
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[
        var vldname = document.all ? document.all["vldname"] : document.getElementById("vldname");
        vldname.controltovalidate = "txtname";
        vldname.errormessage = "Please Fill Your Name";
        vldname.validationGroup = "Enquire";
        vldname.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldname.initialvalue = "";
        var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById(
            "RequiredFieldValidator3");
        RequiredFieldValidator3.controltovalidate = "txtmobile";
        RequiredFieldValidator3.errormessage = "Please Enter Number";
        RequiredFieldValidator3.validationGroup = "Enquire";
        RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        RequiredFieldValidator3.initialvalue = "";
        var vldemail = document.all ? document.all["vldemail"] : document.getElementById("vldemail");
        vldemail.controltovalidate = "txtmail";
        vldemail.errormessage = "Please Fill Your Email";
        vldemail.validationGroup = "Enquire";
        vldemail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldemail.initialvalue = "";
        var vldmsg = document.all ? document.all["vldmsg"] : document.getElementById("vldmsg");
        vldmsg.controltovalidate = "txtmsg";
        vldmsg.errormessage = "Please Fill Your Message";
        vldmsg.validationGroup = "Enquire";
        vldmsg.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldmsg.initialvalue = "";
        //]]>
    </script>


    <script type="text/javascript">
        //<![CDATA[

        var Page_ValidationActive = false;
        if (typeof(ValidatorOnLoad) == "function") {
            ValidatorOnLoad();
        }

        function ValidatorOnSubmit() {
            if (Page_ValidationActive) {
                return ValidatorCommonOnSubmit();
            } else {
                return true;
            }
        }

        document.getElementById('vldname').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldname'));
        }
        Sys.Application.add_init(function() {
            $create(AjaxControlToolkit.FilteredTextBoxBehavior, {
                "FilterType": 2,
                "id": "FilteredTextBoxExtender4"
            }, null, null, $get("txtmobile"));
        });

        document.getElementById('RequiredFieldValidator3').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
        }

        document.getElementById('vldemail').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldemail'));
        }

        document.getElementById('vldmsg').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldmsg'));
        }
        //]]>
    </script>
    </form>
    <script src="../www.google.com/recaptcha/api4c20.js?render=6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt"></script>

    <script>
        function runValidationAndCaptcha() {
            if (typeof(Page_ClientValidate) == 'function') {
                if (!Page_ClientValidate('Enquire')) {
                    return false; // cancel if validation fails
                }
            }

            grecaptcha.ready(function() {
                grecaptcha.execute('6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt', {
                    action: 'Enquire'
                }).then(function(token) {
                    document.getElementById('RecaptchaToken').value = token;

                    // Trigger actual ASP.NET PostBack for the button
                    __doPostBack('ctl00$Button1', '');
                });
            });

            return false; // wait for reCAPTCHA to finish before submit
        }
    </script>
@endsection
