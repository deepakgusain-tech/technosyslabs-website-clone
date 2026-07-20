@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/Services.aspx?s=2"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUJNzgyMDAxNzI3D2QWAmYPZBYWAgEPFgQeCWlubmVyaHRtbAUWaW5mb0B0ZWNobm9zeXNsYWJzLmNvbR4EaHJlZgUdbWFpbHRvOmluZm9AdGVjaG5vc3lzbGFicy5jb21kAgIPFgIfAAUaR3VydWdyYW0sIEhhcnlhbmEgLSAxMjIwMDJkAgMPFgQfAAUOKzkxIDkyMjA0Mzc2ODIfAQUQdGVsOjkxOTIyMDQzNzY4MmQCBA8WAh8ABcYiPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTEnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0yJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS00Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTcnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS05Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTInPk1vYmlsZSAgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE5Jz5DdXN0b20gV2Vic2l0ZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIwJz5SZXNwb25zaXZlIFdlYnNpdGUgRGVzaWduPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjEnPkUtQ29tbWVyY2UgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMic+V2ViIEFwcGxpY2F0aW9uIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjMnPkFQSSBJbnRlZ3JhdGlvbiBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI0Jz5XZWJzaXRlIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI1Jz5TRU8tRnJpZW5kbHkgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNic+QmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50IFBvcnRhbDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI3Jz5IdW1hbiBSZXNvdXJjZSBNYW5hZ2VtZW50IFN5c3RlbSAoSFJNUyk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yOCc+QXNzZXQgTWFuYWdlbWVudCBTeXN0ZW08L2E+PC9saT48L3VsPjwvbGk+ZAIFDxYCHwAFtAc8bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0zJz5DbGFpbSBNYW5hZ2VtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAgYPFgIfAAWFHTxsaSBpZD0nbWVudS1pdGVtLTEnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTInPlN0cmF0ZWdpYyBPdXRzb3VyY2luZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTMnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS01JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz01Jz5DeWJlciBTZWN1cml0eTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTYnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTcnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS04JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz04Jz5FbnRlcnByaXNlIEFwcGxpY2F0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTEyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEzJz5Dcm9zcy1QbGF0Zm9ybSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNCc+Rmx1dHRlciBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNSc+UmVhY3QgTmF0aXZlIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE2Jz5VSS9VWCBEZXNpZ24gZm9yIE1vYmlsZSBBcHBzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTcnPkFwcCBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48L3VsPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBw8WAh8ABZQGPGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0xJz5CYW5raW5nIGFuZCBGaW5hbmNlPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NCc+UlBBIEltcGxlbWVudGF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAggPZBYCAh0PZBYQAgEPFgIfAAUVU3RyYXRlZ2ljIE91dHNvdXJjaW5nZAIDDxYCHwAFtQFBdCBUZWNobm9zeXMgTGFicywgd2UgdW5kZXJzdGFuZCB0aGUgZHluYW1pYyBuYXR1cmUgb2YgdGhlIElUIGFuZCBTZWN1cml0eSBpbmR1c3RyeSwgYW5kIHdlIGFyZSBjb21taXR0ZWQgdG8gcHJvdmlkaW5nIGlubm92YXRpdmUgYW5kIHRhaWxvcmVkIHNvbHV0aW9ucyB0byBtZWV0IHlvdXIgYnVzaW5lc3MgbmVlZHMuZAIFDxYCHwAF9Q8gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MSc+VGVjaG5vbG9neSBDb25zdWx0aW5nPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzknIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBjdXJyZW50LW1lbnUtaXRlbSBwYWdlX2l0ZW0gcGFnZS1pdGVtLTI5NDcgY3VycmVudF9wYWdlX2l0ZW0gIG1lbnUtaXRlbS00NDM5Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MicgYXJpYS1jdXJyZW50PSdwYWdlJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8L2E+PC9saT5kAgcPFgIfAAXLATxpbWcgZmV0Y2hwcmlvcml0eT0naGlnaCcgZGVjb2Rpbmc9J2FzeW5jJyAgIGhlaWdodD0nNTUwJyBzcmM9J1VwbG9hZC9TZXJ2aWNlcy9TdHJhdGVnaWNPdXRzb3VyY2luZy5qcGcnIGNsYXNzPSdhdHRhY2htZW50LWxhcmdlIHNpemUtbGFyZ2Ugd3AtaW1hZ2UtNzcxJyBhbHQ9JycgIHNpemVzPScobWF4LXdpZHRoOjEwMDBweCkgNTB2dyw1MDBweCcgLz4JZAIJDxYCHwAFFVN0cmF0ZWdpYyBPdXRzb3VyY2luZ2QCCw8WAh8ABeMCPHA+IEF0IFRlY2hub3N5cyBMYWJzLCB3ZSB1bmRlcnN0YW5kIHRoZSBkeW5hbWljIG5hdHVyZSBvZiB0aGUgSVQgYW5kIFNlY3VyaXR5IGluZHVzdHJ5LCBhbmQgd2UncmUgY29tbWl0dGVkIHRvIHByb3ZpZGluZyBpbm5vdmF0aXZlIGFuZCB0YWlsb3JlZCBzb2x1dGlvbnMgdG8gbWVldCB5b3VyIGJ1c2luZXNzIG5lZWRzLiBPdXIgU3RyYXRlZ2ljIE91dHNvdXJjaW5nIHNlcnZpY2VzIGVuY29tcGFzcyBhIHJhbmdlIG9mIG9mZmVyaW5ncyBkZXNpZ25lZCB0byBlbmhhbmNlIHlvdXIgb3BlcmF0aW9uYWwgZWZmaWNpZW5jeSwgcmVkdWNlIGNvc3RzLCBhbmQgZHJpdmUgb3ZlcmFsbCBidXNpbmVzcyBzdWNjZXNzLjwvcD4NCmQCDQ8WAh8ABe8wPHNlY3Rpb24gY2xhc3M9J2VsZW1lbnRvci1zZWN0aW9uIGVsZW1lbnRvci1pbm5lci1zZWN0aW9uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTg5ZGRlNDUgZWxlbWVudG9yLXNlY3Rpb24tYm94ZWQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQnIGRhdGEtaWQ9Jzg5ZGRlNDUnIGRhdGEtZWxlbWVudF90eXBlPSdzZWN0aW9uJz4gIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb250YWluZXIgZWxlbWVudG9yLWNvbHVtbi1nYXAtZGVmYXVsdCc+PGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbHVtbiBlbGVtZW50b3ItY29sLTMzIGVsZW1lbnRvci1pbm5lci1jb2x1bW4gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtMDc1ZDNlMycgZGF0YS1pZD0nMDc1ZDNlMycgZGF0YS1lbGVtZW50X3R5cGU9J2NvbHVtbicgc3R5bGUgPSdtYXJnaW46MCBhdXRvOyc+ICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC13cmFwIGVsZW1lbnRvci1lbGVtZW50LXBvcHVsYXRlZCc+ICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTYzM2MzMjkgZWxlbWVudG9yLXdpZGdldCBlbGVtZW50b3Itd2lkZ2V0LXNlcnZpY2UnIGRhdGEtaWQ9JzYzM2MzMjknIGRhdGEtZWxlbWVudF90eXBlPSd3aWRnZXQnIGRhdGEtd2lkZ2V0X3R5cGU9J3NlcnZpY2UuZGVmYXVsdCc+ICAgICAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LWNvbnRhaW5lcic+ICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3ggc2VydmljZS1zdHlsZS1uaW5lJz4JICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWNvbnRlbnQnPgkgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LXRpdGxlJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxoMj5TdGFmZiBBdWdtZW50YXRpb248L2gyPgkgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtZGVzYycgPgkgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT0ndGV4dC1hbGlnbjpqdXN0aWZ5Jz5BdWdtZW50IHlvdXIgdGVhbSB3aXRoIHNraWxsZWQgcHJvZmVzc2lvbmFscyBmcm9tIFRlY2hub3N5cyBMYWJzLiBXaGV0aGVyIHlvdSByZXF1aXJlIGFkZGl0aW9uYWwgZXhwZXJ0aXNlIGZvciBhIHNwZWNpZmljIHByb2plY3Qgb3IgbmVlZCB0byBzY2FsZSB5b3VyIHdvcmtmb3JjZSBxdWlja2x5LCBvdXIgc3RhZmYgYXVnbWVudGF0aW9uIHNlcnZpY2VzIHByb3ZpZGUgeW91IHdpdGggYWNjZXNzIHRvIGEgcG9vbCBvZiBoaWdobHkgcXVhbGlmaWVkIElUIGFuZCBTZWN1cml0eSBwcm9mZXNzaW9uYWxzLiBCZW5lZml0IGZyb20gZmxleGlibGUgc3RhZmZpbmcgc29sdXRpb25zIHRoYXQgYWxpZ24gd2l0aCB5b3VyIHByb2plY3QgdGltZWxpbmVzIGFuZCBidWRnZXQgY29uc3RyYWludHMuPC9wPiAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94LWNvbnRlbnQgLS0+ICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3ggLnNlcnZpY2Utc3R5bGUtbmluZSAtLT4gICAgICAgICAgIDwvZGl2PgkgICAgPC9kaXY+CTwvZGl2PjwvZGl2PjxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb2x1bW4gZWxlbWVudG9yLWNvbC0zMyBlbGVtZW50b3ItaW5uZXItY29sdW1uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTA3NWQzZTMnIGRhdGEtaWQ9JzA3NWQzZTMnIGRhdGEtZWxlbWVudF90eXBlPSdjb2x1bW4nIHN0eWxlID0nbWFyZ2luOjAgYXV0bzsnPiAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtd3JhcCBlbGVtZW50b3ItZWxlbWVudC1wb3B1bGF0ZWQnPiAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC02MzNjMzI5IGVsZW1lbnRvci13aWRnZXQgZWxlbWVudG9yLXdpZGdldC1zZXJ2aWNlJyBkYXRhLWlkPSc2MzNjMzI5JyBkYXRhLWVsZW1lbnRfdHlwZT0nd2lkZ2V0JyBkYXRhLXdpZGdldF90eXBlPSdzZXJ2aWNlLmRlZmF1bHQnPiAgICAgICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC1jb250YWluZXInPiAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94IHNlcnZpY2Utc3R5bGUtbmluZSc+CSAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1jb250ZW50Jz4JICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC10aXRsZScgPgkgICAgICAgICAgICAgICAgICAgICAgICA8aDI+SVQgV29ya2ZvcmNlIFRyYW5zZm9ybWF0aW9uPC9oMj4JICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWRlc2MnID4JICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9J3RleHQtYWxpZ246anVzdGlmeSc+RW1wb3dlciB5b3VyIHdvcmtmb3JjZSBmb3IgdGhlIGRpZ2l0YWwgYWdlIHdpdGggb3VyIElUIFdvcmtmb3JjZSBUcmFuc2Zvcm1hdGlvbiBzZXJ2aWNlcy4gV2UgaGVscCB5b3UgaWRlbnRpZnkgc2tpbGwgZ2FwcywgcHJvdmlkZSB0cmFpbmluZyBwcm9ncmFtcywgYW5kIGZhY2lsaXRhdGUgYSBzZWFtbGVzcyB0cmFuc2l0aW9uIHRvIG5ldyB0ZWNobm9sb2dpZXMuIFN0YXkgYWhlYWQgb2YgdGhlIGN1cnZlIGJ5IHRyYW5zZm9ybWluZyB5b3VyIHRlYW0gaW50byBhIGR5bmFtaWMgYW5kIGFkYXB0YWJsZSBmb3JjZSByZWFkeSB0byB0YWNrbGUgdGhlIGNoYWxsZW5nZXMgb2YgdGhlIGV2ZXItZXZvbHZpbmcgSVQgbGFuZHNjYXBlLjwvcD4gICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveC1jb250ZW50IC0tPiAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94IC5zZXJ2aWNlLXN0eWxlLW5pbmUgLS0+ICAgICAgICAgICA8L2Rpdj4JICAgIDwvZGl2Pgk8L2Rpdj48L2Rpdj48ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29sdW1uIGVsZW1lbnRvci1jb2wtMzMgZWxlbWVudG9yLWlubmVyLWNvbHVtbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC0wNzVkM2UzJyBkYXRhLWlkPScwNzVkM2UzJyBkYXRhLWVsZW1lbnRfdHlwZT0nY29sdW1uJyBzdHlsZSA9J21hcmdpbjowIGF1dG87Jz4gICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LXdyYXAgZWxlbWVudG9yLWVsZW1lbnQtcG9wdWxhdGVkJz4gICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtNjMzYzMyOSBlbGVtZW50b3Itd2lkZ2V0IGVsZW1lbnRvci13aWRnZXQtc2VydmljZScgZGF0YS1pZD0nNjMzYzMyOScgZGF0YS1lbGVtZW50X3R5cGU9J3dpZGdldCcgZGF0YS13aWRnZXRfdHlwZT0nc2VydmljZS5kZWZhdWx0Jz4gICAgICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtY29udGFpbmVyJz4gICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveCBzZXJ2aWNlLXN0eWxlLW5pbmUnPgkgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtY29udGVudCc+CSAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtdGl0bGUnID4JICAgICAgICAgICAgICAgICAgICAgICAgPGgyPkNvbnRyYWN0LUJhc2VkIFN0YWZmaW5nPC9oMj4JICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWRlc2MnID4JICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9J3RleHQtYWxpZ246anVzdGlmeSc+RW5zdXJlIHByb2plY3Qgc3VjY2VzcyB3aXRoIG91ciBjb250cmFjdC1iYXNlZCBzdGFmZmluZyBzb2x1dGlvbnMuIFRlY2hub3N5cyBMYWJzIG9mZmVycyBhIGRpdmVyc2UgcmFuZ2Ugb2YgSVQgYW5kIFNlY3VyaXR5IHByb2Zlc3Npb25hbHMgb24gYSBjb250cmFjdHVhbCBiYXNpcywgYWxsb3dpbmcgeW91IHRvIG1lZXQgcHJvamVjdCBkZW1hbmRzIHdpdGhvdXQgdGhlIGxvbmctdGVybSBjb21taXRtZW50IG9mIGZ1bGwtdGltZSBoaXJlcy4gT3VyIGV4cGVydHMgYXJlIGVxdWlwcGVkIHRvIHNlYW1sZXNzbHkgaW50ZWdyYXRlIGludG8geW91ciB0ZWFtcywgZW5zdXJpbmcgYSBzbW9vdGggY29sbGFib3JhdGlvbiBhbmQgZWZmaWNpZW50IHByb2plY3QgZGVsaXZlcnkuPC9wPiAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94LWNvbnRlbnQgLS0+ICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3ggLnNlcnZpY2Utc3R5bGUtbmluZSAtLT4gICAgICAgICAgIDwvZGl2PgkgICAgPC9kaXY+CTwvZGl2PjwvZGl2PiAgPC9kaXY+PC9zZWN0aW9uPjxzZWN0aW9uIGNsYXNzPSdlbGVtZW50b3Itc2VjdGlvbiBlbGVtZW50b3ItaW5uZXItc2VjdGlvbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC04OWRkZTQ1IGVsZW1lbnRvci1zZWN0aW9uLWJveGVkIGVsZW1lbnRvci1zZWN0aW9uLWhlaWdodC1kZWZhdWx0IGVsZW1lbnRvci1zZWN0aW9uLWhlaWdodC1kZWZhdWx0JyBkYXRhLWlkPSc4OWRkZTQ1JyBkYXRhLWVsZW1lbnRfdHlwZT0nc2VjdGlvbic+ICA8ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29udGFpbmVyIGVsZW1lbnRvci1jb2x1bW4tZ2FwLWRlZmF1bHQnPjxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb2x1bW4gZWxlbWVudG9yLWNvbC0zMyBlbGVtZW50b3ItaW5uZXItY29sdW1uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTA3NWQzZTMnIGRhdGEtaWQ9JzA3NWQzZTMnIGRhdGEtZWxlbWVudF90eXBlPSdjb2x1bW4nIHN0eWxlID0nbWFyZ2luOjAgYXV0bzsnPiAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtd3JhcCBlbGVtZW50b3ItZWxlbWVudC1wb3B1bGF0ZWQnPiAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC02MzNjMzI5IGVsZW1lbnRvci13aWRnZXQgZWxlbWVudG9yLXdpZGdldC1zZXJ2aWNlJyBkYXRhLWlkPSc2MzNjMzI5JyBkYXRhLWVsZW1lbnRfdHlwZT0nd2lkZ2V0JyBkYXRhLXdpZGdldF90eXBlPSdzZXJ2aWNlLmRlZmF1bHQnPiAgICAgICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC1jb250YWluZXInPiAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94IHNlcnZpY2Utc3R5bGUtbmluZSc+CSAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1jb250ZW50Jz4JICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC10aXRsZScgPgkgICAgICAgICAgICAgICAgICAgICAgICA8aDI+SVQgT3V0c291cmNpbmc8L2gyPgkgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtZGVzYycgPgkgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT0ndGV4dC1hbGlnbjpqdXN0aWZ5Jz5UYWtlIHlvdXIgYnVzaW5lc3MgdG8gbmV3IGhlaWdodHMgYnkgbGV2ZXJhZ2luZyBvdXIgY29tcHJlaGVuc2l2ZSBJVCBvdXRzb3VyY2luZyBzZXJ2aWNlcy4gVGVjaG5vc3lzIExhYnMgYWN0cyBhcyBhbiBleHRlbnNpb24gb2YgeW91ciBJVCBkZXBhcnRtZW50LCBoYW5kbGluZyBldmVyeXRoaW5nIGZyb20gaW5mcmFzdHJ1Y3R1cmUgbWFuYWdlbWVudCB0byBhcHBsaWNhdGlvbiBkZXZlbG9wbWVudCBhbmQgc3VwcG9ydC4gQmVuZWZpdCBmcm9tIG91ciBleHBlcnRpc2UsIGFkdmFuY2VkIHRlY2hub2xvZ3kgY2FwYWJpbGl0aWVzLCBhbmQgYSBwcm92ZW4gdHJhY2sgcmVjb3JkIG9mIGRlbGl2ZXJpbmcgaGlnaC1xdWFsaXR5IElUIHNvbHV0aW9ucy48L3A+ICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3gtY29udGVudCAtLT4gICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveCAuc2VydmljZS1zdHlsZS1uaW5lIC0tPiAgICAgICAgICAgPC9kaXY+CSAgICA8L2Rpdj4JPC9kaXY+PC9kaXY+ICA8L2Rpdj48L3NlY3Rpb24+ZAIPDxYCHwAFRldhbnQgdG8gbGVhcm4gbW9yZSBhYm91dCBob3cgd2UgaGVscCBjbGllbnRzIGluIFN0cmF0ZWdpYyBPdXRzb3VyY2luZz9kAgkPFgIeBFRleHQF0wU8YWRkcmVzcyBjbGFzcz0nY29udGFjdC1pbmZvIG9mZnNldC10b3AtNTAnPjxwPjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPkFsdEYgR2xvYmFsIEJ1c2luZXNzIFBhcmssIE1SMSwgN3RoIEZsb29yLCBUb3dlciBELCBNZWhyYXVsaSwgR3VydWdyYW0sIEhhcnlhbmEtMTIyMDAyPC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPlVLIE9mZmljZSBBZGRyZXNzOiZuYnNwOyZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij41MTcgVGhlIEJsZW5oZWltIENlbnRlciBQcmluY2UgUmVnZW50IFJvYWQsIFRXMyAxTkQgVUs8L3NwYW4+PC9wPjwvcD5kAgoPFgIfAgU3PGRsPjxkdD48L2R0PiA8ZGQ+aW5mb0B0ZWNobm9zeXNsYWJzLmNvbTwvZGQ+PC9kbD48L2RsPmQCCw8WAh8CBT88ZGwgY2xhc3M9J29mZnNldC10b3AtMCc+PGR0PiA8L2R0PjxkZD4rOTEgOTIyMDQzNzY4MjwvZGQ+PC9kbD5kZGswGaPX9hIgOVBSZmGtPsAzQY1F" />
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
                            value="/wEdAAf7q+SRNMiY5SivC/L8WhM1D7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2eYEny2o+stj1foxb7z244Ci0euvA=" />
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
                            <h2 id="ContentPlaceHolder1_divhead">Strategic Outsourcing</h2>
                        </div>
                        <div class="breadcumb-inner">
                            <p id="ContentPlaceHolder1_divpara">At Techsys Technologies, we understand the dynamic nature
                                of the IT and Security industry, and we are committed to providing innovative and
                                tailored solutions to meet your business needs.</p>
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
                                                src='Upload/Services/StrategicOutsourcing.jpg'
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
                                                                Strategic Outsourcing</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b7e9f36 elementor-widget elementor-widget-text-editor"
                                                        data-id="b7e9f36" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container"
                                                            style="text-align:justify">
                                                            <div id="ContentPlaceHolder1_divContent"
                                                                class="kc-elm kc-css-486867 kc_text_block">
                                                                <p> At Techsys Technologies, we understand the dynamic
                                                                    nature of the IT and Security industry, and
                                                                    we're committed to providing innovative and
                                                                    tailored solutions to meet your business needs.
                                                                    Our Strategic Outsourcing services encompass a
                                                                    range of offerings designed to enhance your
                                                                    operational efficiency, reduce costs, and drive
                                                                    overall business success.</p>
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
                                                                            <h2>Staff Augmentation</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Augment
                                                                                your team with skilled professionals
                                                                                from Techsys Technologies. Whether you
                                                                                require additional expertise for a
                                                                                specific project or need to scale
                                                                                your workforce quickly, our staff
                                                                                augmentation services provide you
                                                                                with access to a pool of highly
                                                                                qualified IT and Security
                                                                                professionals. Benefit from flexible
                                                                                staffing solutions that align with
                                                                                your project timelines and budget
                                                                                constraints.</p>
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
                                                                            <h2>IT Workforce Transformation</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Empower
                                                                                your workforce for the digital age
                                                                                with our IT Workforce Transformation
                                                                                services. We help you identify skill
                                                                                gaps, provide training programs, and
                                                                                facilitate a seamless transition to
                                                                                new technologies. Stay ahead of the
                                                                                curve by transforming your team into
                                                                                a dynamic and adaptable force ready
                                                                                to tackle the challenges of the
                                                                                ever-evolving IT landscape.</p>
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
                                                                            <h2>Contract-Based Staffing</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Ensure
                                                                                project success with our
                                                                                contract-based staffing solutions.
                                                                                Techsys Technologies offers a diverse
                                                                                range of IT and Security
                                                                                professionals on a contractual
                                                                                basis, allowing you to meet project
                                                                                demands without the long-term
                                                                                commitment of full-time hires. Our
                                                                                experts are equipped to seamlessly
                                                                                integrate into your teams, ensuring
                                                                                a smooth collaboration and efficient
                                                                                project delivery.</p>
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
                                                                            <h2>IT Outsourcing</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Take your
                                                                                business to new heights by
                                                                                leveraging our comprehensive IT
                                                                                outsourcing services. Techsys Technologies
                                                                                acts as an extension of your IT
                                                                                department, handling everything from
                                                                                infrastructure management to
                                                                                application development and support.
                                                                                Benefit from our expertise, advanced
                                                                                technology capabilities, and a
                                                                                proven track record of delivering
                                                                                high-quality IT solutions.</p>
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
                                                                Strategic Outsourcing?</h2>
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
