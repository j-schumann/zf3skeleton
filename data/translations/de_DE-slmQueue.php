<?php
return [
'view.slmQueue.job.class' => 'Job',
'view.slmQueue.job.content' => 'Inhalt',
'view.slmQueue.job.created' => 'Angelegt',
'view.slmQueue.job.finished' => 'Beendet',
'view.slmQueue.job.message' => 'Ausgabe',
'view.slmQueue.job.trace' => 'Trace',
'view.slmQueue.listBuried.heading' => 'SlmQueue - Abgebrochene Jobs in "%0%"',
'view.slmQueue.listBuried.intro' => 'Hier sehen Sie die Liste aller abgebrochenen Jobs.<br />
Jobs werden als abgebrochen markiert wenn eine Exception geworfen wird. Sie können aber auch absichtlich durch Werfen der "BuryableException" beendet werden.',
'view.slmQueue.queue.name' => 'Warteschlange',
'view.slmQueue.unbury.heading' => 'SlmQueue - Abgebrochenen Job neustarten',
'view.slmQueue.unbury.intro' => 'Hier können Sie eine Kopie eines abgebrochenen Jobs erneut in die Warteschlange schieben.<br />
Achtung: Stellen Sie sicher dass die aufgetretenen Fehler behoben sind und der Job nicht mehrfach ausgeführt wird, löschen Sie den abgebrochenen Job nachdem Sie die Kopie hinzugefügt haben!',
'message.slmQueue.confirmUnbury' => 'Wollen Sie diesen Job erneut in die Warteschlange schieben?',
'message.slmQueue.jobCopyPushed' => 'Eine Kopie des Jobs wurde an die Warteschlange gesendet!',
'message.slmQueue.jobNotFound' => 'Der angegebene Job existiert nicht in angegebenen Warteschlange!',
'message.slmQueue.queueNotFound' => 'Die angegebene Warteschlange existiert nicht!',
'message.slmQueue.jobDeleted' => 'Der Job wurde gelöscht!',
'view.slmQueue.unburyJob' => 'Erneut ausführen',
'view.slmQueue.deleteJob' => 'Job löschen',
'view.slmQueue.delete.heading' => 'SlmQueue - Job löschen',
'view.slmQueue.delete.intro' => 'Hier können Sie den gewählten Job aus der Warteschlange löschen.<br />
Dies ist gedacht für abgebrochene Jobs die zur Prüfung in der Warteschlange verbleiben.',
'message.slmQueue.confirmDelete' => 'Wollen Sie diesen Job wirklich löschen?',
'message.slmQueue.noJobsFound' => 'Keine passenden Jobs gefunden!',
'view.slmQueue.recover.heading' => 'SlmQueue - Jobs neu starten',
'view.slmQueue.recover.intro' => 'You can recover long running and probably failed jobs by entering a maximum execution time that is allowed for currently running jobs. All jobs that are running longer will be resetted to state "pending".<br /><b>Attention: Use with care to avoid double execution of long running jobs!</b>',
'view.slmQueue.index.index.heading' => 'SlmQueue - Übersicht',
'view.slmQueue.index.index.intro' => 'Hier sehen Sie alle konfigurierten (auf Doctrine basierenden) Warteschlangen und die Anzahl der Jobs im jeweiligen Status.',
'view.slmQueue.queue.pendingCount' => 'Wartend',
'view.slmQueue.queue.runningCount' => 'Laufend',
'view.slmQueue.queue.buriedCount' => 'Abgebrochen',
'view.slmQueue.gotoRecover' => 'Jobs neu starten',
'view.slmQueue.gotoBuriedList' => 'Liste abgebrochener Jobs',
'view.slmQueue.gotoOverview' => 'Zur Übersicht',
'message.slmQueue.noQueuesFound' => 'Keine passenden Warteschlangen gefunden!',
'view.slmQueue.gotoRunningList' => 'Liste laufender Jobs',
'view.slmQueue.listRunning.heading' => 'SlmQueue - Liste laufender Jobs in "%0%"',
'view.slmQueue.listRunning.intro' => 'Hier sehen Sie alle Jobs in der Warteschlange die den Status "Laufend" haben.<br />
Diese Jobs können durch einen schweren Fehler auch abgebrochen sein, bspw. wenn der Worker-Prozess unerwartet beendet wurde. In diesem Fall können Sie einen Job "releasen", d.h. seinen Zustand wieder auf "Wartend" setzen um ihn (erneut) ausführen zu lassen. Alternativ kann der Job gelöscht werden, bspw. wenn seine Ausführung nicht mehr erforderlich ist.',
'view.slmQueue.job.executed' => 'Gestartet',
'view.slmQueue.releaseJob' => 'Job neu starten',
'view.slmQueue.release.heading' => 'SlmQueue - Laufenden Job neu starten',
'view.slmQueue.release.intro' => 'Hier können Sie einen als "laufend" markierten Job erneut in die Warteschlange schicken, bspw. wenn der Worker-Prozess unerwartet beendet und der Job damit nicht ausgeführt und auch nicht als abgebrochen markiert wurde.',
'message.slmQueue.confirmRelease' => 'Wollen Sie diesen Job wirklich erneut in die Warteschlange schieben?',
'message.slmQueue.jobReleased' => 'Der Job wurde zur erneuten Ausführung auf "wartend" gesetzt.',
'mail.slmQueue.buriedJobsFound.subject' => 'Abgebrochene Jobs in der Warteschlange gefunden!',
'mail.slmQueue.buriedJobsFound.body' => 'Hallo!<br />
<br />
In der Warteschlange "%queueName%" wurden %count% abgebrochene(r) Job(s) gefunden.<br />
<br />
Bitte prüfen Sie die Liste der Jobs unter <a href="%queueUrl%">%queueUrl%</a> und löschen Sie die Jobs oder starten Sie sie neu!',
'mail.slmQueue.longRunningJobsFound.subject' => 'Lang laufende Jobs in der Warteschlange gefunden!',
'mail.slmQueue.longRunningJobsFound.body' => 'Hallo!<br />
<br />
In der Warteschlange "%queueName%" wurde(n) %count% Job(s) mit einer Laufzeit von mehr als %threshold% Minuten gefunden.<br />
<br />
Bitte prüfen Sie die Liste der Jobs unter <a href="%queueUrl%">%queueUrl%</a> und starten Sie sie ggf. neu!',
'navigation.slmQueue' => 'SlmQueue-Verwaltung',
'navigation.slmQueue.recover' => 'Jobs neustarten',
'navigation.slmQueue.listRunning' => 'laufende Jobs',
'navigation.slmQueue.listBuried' => 'abgebrochene Jobs',
'navigation.slmQueue.unbury' => 'Job neustarten',
'navigation.slmQueue.release' => 'Job zurücksetzen',
'navigation.slmQueue.delete' => 'Job löschen',
];
