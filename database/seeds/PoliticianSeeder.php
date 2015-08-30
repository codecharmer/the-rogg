<?php

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\State;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface as PoliticianRepo;

class PoliticianSeeder extends Seeder
{
    private $politicianRepo;

    public function __construct(PoliticianRepo $politicianRepo)
    {
        $this->politicianRepo = $politicianRepo;
    }

    public function run()
    {
        Schema::drop('politicians');

        $this->seedCandidates();
        $this->seedCongress();
        $this->seedBios();
    }

    private function seedCandidates()
    {
        $politician = $this->politicianRepo->make('Lincoln Chafee', State::RI, Office::Senator, Party::Democrat);
        $politician->setBio("Lincoln Chafee is Democratic candidate for the office of President of the United States in 2016. Chafee is the former Democratic Governor of Rhode Island. First elected to the governorship as an Independent on November 2, 2010, he became the only governor not to belong to one of the major parties when he was sworn in January 4, 2011. Chafee previously belonged to the Republican Party, serving in the U.S. Senate for seven years. Initially appointed to his father's seat upon John Chafee's death in 1999, he won a six-year term in 2000. In 2006, he lost his seat to Democrat Sheldon Whitehouse. The following year, Chafee left the Republican Party to become an Independent. Then, in anticipation of a possible re-election loss in 2014, as well as his affinity for his former U.S. Senate colleague, President Barack Obama, Chafee made his second party switch, formally joining the Democratic Party on May 30, 2013. In recent candidate rankings, Crowdpac ranked Chafee as a 0.3L (L being liberal) on a scale ranging from 10L to 10C, making him the least liberal Democratic presidential candidate.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Hillary Clinton', State::NY, Office::Unelected, Party::Democrat);
        $politician->setBio("Hillary Clinton is a Democratic candidate for the office of President of the United States in 2016. Clinton's run was announced by campaign chairman John Podesta in an email to donors on April 12, 2015, and followed shortly by an official campaign video entitled \"Getting Started\".  Clinton served as thesecretary of state of the United States of America from January 21, 2009, to February 1, 2013, and as a senator fromNew York from 2001 to 2009. She lost the Democraticpresidential primary nomination to Barack Obamain 2008. Clinton also served as first lady during her husband, President Bill Clinton's, two terms. She is the first former first lady to serve both in the U.S. Senate and in a president's cabinet. When the U. S. was in its formative years, a secretary of state ascending to the presidency was commonplace, but the last secretary of state to be elected to the nation's highest office was James Buchanan in 1856. In recent candidate ankings, Crowdpac ranked Clinton as a 6.5L (L being liberal) on a scale ranging from 10L to 10C, making her the third most liberal Democratic presidential candidate.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make("Martin O'Malley", State::MD, Office::Unelected, Party::Democrat);
        $politician->setBio("Martin O'Malley is a Democratic candidate for the office of President of the United States in 2016. He made his announcement on May 30, 2015, becoming the third Democratic candidate to enter the race. O'Malley served as the governor of Maryland from January 17, 2007, to January 21, 2015. He served as the chair of the Governor's Executive Council from 2007 to 2015 and the co - chair of the Council of Governors from 2013 to 2015. Prior to his gubernatorial career, O'Malley served as the mayor of Baltimore from 1999 to 2007. O'Malley previously stated on January 8, 2015, \"I’m very seriously considering running in 2016. Right now, my primary responsibility is to move my family back to Baltimore, which I will do in another situated. \" Seventeen presidents have also served as governors. In recent candidate rankings, Crowdpac ranked O'Malley as a 6.7L (L being liberal) on a scale ranging from 10L to 10C, making him the second most liberal Democratic presidential candidate.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        //$politician = $this->politicianRepo->make('Bernie Sanders', State::VT, Office::Senator, Party::Democrat);
        //$politician->setBio("Bernie Sanders is a Democratic candidate for the office of President of the United States in 2016. Sanders is an independent member of the U.S. Senate from the state of Vermont. He was first elected to the Senate in 2006. Sanders calls himself a socialist and is a member of the Senate Democratic Caucus. Sanders made his formal announcement for the Democratic nomination at a press conference on April 30, 2015. His office streamed the announcement live using Periscope, a social media service which allows the streaming of video from smartphones. On May 26, 2015, Sanders made his first public appearance on the campaign trail where he reiterated his run for the presidency. During the speech, Sanders discussed economic and environmental policy at length. \"This great nation and its government belong to all of the people and not to a handful of billionaires, their super PACs and their lobbyists,\" Sanders remarked Previously, in March 2014, Sanders said that he was \"prepared to run for President\" in 2016. Sanders also told Yahoo Newsthat he does \"not wake up every morning with a burning desire to be president of the United States. And I think anybody who does should be immediately suspected as probably totally crazy.\" Sixteen senators have been elected to the presidency, including President Barack Obama (D). In recent candidate rankings, Crowdpac ranked Sanders as a 7.6L (L being liberal) on a scale ranging from 10L to 10C, making him the most liberal Democratic presidential candidate..");
        //$politician->setIsPresidentialCandidate(true);
        //$politician->save();

        $politician = $politician = $this->politicianRepo->make('Jim Webb', State::VA, Office::Unelected, Party::Democrat);
        $politician->setBio("Jim Webb is a Democratic candidate for the office of President of the United States in 2016. Webb was a U.S. senator from Virginia from January 3, 2007, to January 3, 2013. Webb served as the secretary of the Navy from 1987 to 1988 and in the United States Marines from 1968 to 1972. On July 2, 2015, Webb declared his candidacy for president in an email to supporters. He wrote, \"We need a President who understands leadership, who has a proven record of actual accomplishments, who can bring about bipartisan solutions, who can bring people from both sides to the table to get things done.\" In November 2014, Webb announced, \"I have decided to launch an Exploratory Committee to examine whether I should run for President in 2016. I made this decision after reflecting on numerous political commentaries and listening to many knowledgeable people. I look forward to listening and talking with more people in the coming months as I decide whether or not to run.\" Sixteen senators have been elected to the presidency, including President Barack Obama (D). In recent candidate rankings, Crowdpac ranked Webb as a 5.4L (L being liberal) on a scale ranging from 10L to 10C, making him the fifth most liberal Democratic presidential candidate.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Joe Biden', State::DE, Office::VicePresident, Party::Democrat);
        $politician->setBio("Joe Biden is a potential candidate for the office of President of the United States in 2016. Biden is the Vice President of the United States. He and President Barack Obama were sworn in for their first terms of office on January 20, 2009. Biden was sworn in for his second term as vice president on January 20, 2013. Before becoming vice president, Biden served as a U.S. senator from Delaware from 1973 to 2009. He also ran for president in 1988 and 2008. Biden withdrew his candidacy from the 1988 race after he was found plagiarizing speeches from other politicians. He withdrew from the 2008 presidential race on January 3, 2008, after receiving support from only 1 percent of the delegates at the Iowa caucuses. Biden has hinted that he is considering a run for president in 2016 in several interviews. In July 2013, Biden said, \"I can die a happy man never having been president of the United States of America, but it doesn't mean I won't run. \" Biden later said in an interview on February 7, 2014, \"There’s no obvious reason for me why I think I should not run.\" President Barack Obama commented on Biden and Hillary Clinton when asked to compare them, stating, \"both Hillary and Joe would make outstanding presidents, and possess the qualities that are needed to be outstanding presidents.\" Fourteen vice presidents have become president, but only four were directly elected after serving as vice president. In recent candidate rankings, Crowdpac ranked Biden as a 6.7L (L being liberal) on a scale ranging from 10L to 10C, making him, if he enters the race, the sixth most liberal Democratic presidential candidate.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Jeb Bush', State::FL, Office::Unelected, Party::Republican);
        $politician->setBio("Jeb Bush is a candidate for the office of President of the United States in 2016. He officially announced his campaign on June 15, 2015, in Miami. Bush served as the governor of Florida from 1999 to 2007. He is the son of President George H.W. Bush and the younger brother of President George W. Bush. Bush is the first brother of a president to run for the office since Robert Kennedy in 1968. Bush posted the following comments on his Facebook page on December 16, 2014: \"I have decided to actively explore the possibility of running for President of the United States. In January, I also plan to establish a Leadership PAC that will help me facilitate conversations with citizens across America to discuss the most critical challenges facing our exceptional nation. The PAC’s purpose will be to support leaders, ideas and policies that will expand opportunity and prosperity for all Americans. In the coming months, I hope to visit with many of you and have a conversation about restoring the promise of America.\" On April 19, 2013, former President George W. Bush said that he hoped his brother Jeb would consider running for president and would not \"be afraid of entering the arena\" because of the family name. Seventeen presidents, including George W. Bush, have also served as governors. In recent candidate rankings, Crowdpac ranked Bush as a 5.1C (C being conservative) on a scale ranging from 10L to 10C, making him the ninth most conservative Republican presidential candidate. Bush received a grade of a \"B/85\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Ben Carson', State::MI, Office::Unelected, Party::Republican);
        $politician->setBio("Ben Carson is a Republican candidate for the office of President of the United States in 2016. Carson, a retired paediatric neurosurgeon, gained popularity with conservatives after his speech at the 2013 National Prayer Breakfast, where he expressed his dissatisfaction with President Barack Obama's policies and the direction of the country. At age 33, Carson became the director of pediatric neurosurgery at Johns Hopkins University, making him the youngest major division director in the hospital's history. He was also a professor of neurosurgery, oncology, plastic surgery and pediatric medicine. On May 3, 2015, Carson announced his bid for the presidency the day before his scheduled campaign kickoff in Detroit, Michigan. \"I'm willing to be a part of the equation, and, therefore, I'm announcing my candidacy for president of the United States,\" discussed Carson in an interview with Sinclair Broadcasting. Carson announced that he formed a presidential exploratory committee on March 3, 2015. He said, \"I very much need and look forward to your feedback and help. All of us are frustrated with the way Washington has let us down. The career politicians simply don't understand the disappointment, anger and pain in real America. As they cater to the special interests first, they don't even seem to care about how failed policies actually affect us, the people of the United States. I think it's time for us to show them how much we do care about the job they are doing. ...If I believe that I have your support and your commitment to help, I will run for president to lead this great country to a brighter future. \" Only three previous presidents had no prior political experience, but all three of them, Zachary Taylor, Ulysses S. Grant and Dwight Eisenhower, served as high-ranking military officials. In recent candidate rankings, Crowdpac ranked Carson as a 7.5C (C being conservative) on a scale ranging from 10L to 10C, making him the fourth most conservative Republican presidential candidate. Carson received a grade of a \"B -/82\" from the Leadership Project for America PAC, a conservative political action committee");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Chris Christie', State::NJ, Office::Governor, Party::Republican);
        $politician->setBio("Chris Christie is a Republican candidate for the office of President of the United States in 2016. On June 30, 2015, Christie made his announcement at Livingston High School, which he graduated from in 1980. Christie is the current governor of New Jersey. He was first elected in 2009. Prior to his gubernatorial bid, Christie served as the U.S. attorney for New Jersey from 2002 to 2008. When asked on August 14, 2014, whether he would enter the presidential race in 2016, Christie stated, \"I'm thinking about it. It is an enormous decision to make not only for me, but my family. Probably by the end of this year or the beginning of next I’ll decide. \" In 2012, Christie made visits to key states, including Iowa,New Hampshire and South Carolina. He also appeared at a national fundraising event in New York City on September 23, 2013. There have been 17 presidents who previously served as governors. In recent candidate rankings, Crowdpac ranked Christie as a 3.4C (C being conservative) on a scale ranging from 10L to 10C, making him the third least conservative Republican presidential candidate. Christie received a grade of a \"C -/70\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Jim Gilmore', State::VA, Office::Unelected, Party::Republican);
        $politician->setBio("Jim Gilmore is a candidate for the office of President of the United States in 2016. On July 29, 2015, Gilmore filed paperwork with the Federal Election Commission to run for president. He also released a web video formally announcing his candidacy on July 30, 2015. Gilmore served as attorney general of Virginia from 1994 to 1997. From 1998 to 2002, he was the governor of Virginia. He has chaired or been a member of numerous boards, committees and organizations, including the National Rifle Association, where he is currently on the board. He is also the President and CEO of the conservative think tank Free Congress Foundation. Gilmore's announcement that he was entering the 2016 presidential race was expected, as he mentioned his intentions to announce in early August to the Richmond Times - Dispatch in July. This is also not his first bid for the presidency. He had begun to campaign in 2007 for the 2008 GOP presidential nomination, but dropped out of the race early, instead going on to race unsuccessfully against Mark Warner(D) for a seat in the U. S. Senate in the 2008 Virginia General Election");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        //$politician = $this->politicianRepo->make('Lindsey Graham', State::SC, Office::Senator, Party::Republican);
        //$politician->setBio("Lindsey Graham is a Republican candidate for the office of President of the United States in 2016. He made his announcement in his home town of Central, South Carolina, on June 1, 2015. During his announcement, he focused on his experience with foreign policy and national defense. Graham is a Republican member of the U. S. Senate from the state of South Carolina. He was first elected to the Senate in 2002 and most recently won re - election in 2014. Graham also represented South Carolina's 3rd Congressional District in the U.S. House of Representatives from January 3, 1995, to January 3, 2003. On January 18, 2015, Graham said that he was considering a run for president in 2016. He noted that his foreign policy knowledge qualifies him to run. He said, \"I think the world is falling apart, and I've been more right than wrong when it comes to foreign policy. But we'll see. \" In recent candidate rankings, Crowdpac ranked Graham as a 4.6C (C being conservative) on a scale ranging from 10L to 10C, making him the fifth least conservative Republican presidential candidate. He received a grade of \"B / 84\" from the Leadership Project for America PAC, a conservative political action committee.");
        //$politician->setIsPresidentialCandidate(true);
        //$politician->save();

        $politician = $this->politicianRepo->make('Mike Huckabee', State::AR, Office::Unelected, Party::Republican);
        $politician->setBio("Mike Huckabee is a candidate for the office of President of the United States in 2016. Huckabee was the 44th Governor of Arkansas from 1996 to 2007 and a 2008 presidential candidate. On January 3, 2015, Huckabee announced that he would no longer host his Fox News talk show Huckabee. He said, \"As much as I have loved doing the show, I cannot bring myself to rule out another presidential run. “Oh be clear, I'm not making that announcement right now and my timetable is still just what wait was before, later this spring, but I agree with Fox this is the right thing and now is the right time. \" Huckabee officially announced his presidential run in his hometown of Hope, Arkansas, on May 5, 2015. After describing his early life in the town, he declared, \"So it seems perfectly fitting that it would be here that I announce that I am a candidate for president of the United States of America. \" When asked on December 22, 2013, whether he would be interested in another run for the presidency, Huckabee said, \"It would be, frankly, dishonest to say no. \" Since his 2008 bid for the presidency, Huckabee's popularity has grown due to his Fox News talk show Huckabee and the founding of the Huck PAC, which provides funding to key congressional campaigns across the country. Seventeen governors have served as president. In recent candidate rankings, Crowdpac ranked Huckabee as a 6.7C(C being conservative) on a scale ranging from 10L to 10C, making him the seventh most conservative Republican presidential candidate. Huckabee received a grade of a \"D / 63\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        //$politician = $this->politicianRepo->make('Ted Cruz', State::TX, Office::Senator, Party::Republican);
        //$politician->setBio("Ted Cruz is a Republican candidate for the office of President of the United States in 2016. Cruz announced the launch of his campaign in a tweet on March 23, 2015. Sixteen senators have been elected president, including Barack Obama. Cruz is a Republican member of the United States Senate from Texas. He won election to the Senate on November 6, 2012. Cruz, who was born in Canada, has an American mother and a Cuban father; in 2014, he officially renounced his Canadian dual citizenship. \"The renunciation became official on May 14, roughly 9 months after he learned he wasn't only an American,\" according to the Dallas Morning News. \"The U. S. Constitution requires presidents to be 'natural born' citizens, which is commonly believed to include Americans born with the right to citizenship, even if they were not born on American soil specifically,\" according to Time. In recent candidate rankings, Crowdpac ranked Cruz as a 9.5C(C being conservative) on a scale ranging from 10L to 10C, making him the second most conservative Republican presidential candidate. Cruz received a grade of a \"B / 86\" from the Leadership Project for America PAC, a conservative political action committee.");
        //$politician->setIsPresidentialCandidate(true);
        //$politician->save();

        $politician = $this->politicianRepo->make('Carly Fiorina', State::CA, Office::Unelected, Party::Republican);
        $politician->setBio("Bobby Jindal is a candidate for the office of President of the United States in 2016. Jindal is the governor of Louisiana. He was first elected in 2007 and was re - elected to the position on October 22, 2011. He previously served as a member of the U. S. House of Representatives, representing Louisiana's 1st Congressional District from 2004 to 2008. Jindal was considered a possible candidate for Mitt Romney's vice presidential running mate in 2012, but Romney chose Paul Ryan instead. Jindal announced his bid for the presidency today through a press release on his website. \"My name is Bobby Jindal, and I am running for President of the United States of America,\" the announcement read. The post included videos filming his family's reaction to the news. Previously, during a lunch with conservative bloggers on September 16, 2014, Jindal said, \"I'm not going to be coy, I'm thinking about running for president and praying about it. \"  Seventeen presidents have also served as governors. In recent candidate rankings, Crowdpac ranked Jindal as a 4.8C (C being conservative) on a scale ranging from 10L to 10C, making him the tenth most conservative Republican presidential candidate. Jindal received a grade of a \"A -/91\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('John Kasich', State::OH, Office::Governor, Party::Republican);
        $politician->setBio("John Kasich is a Republican candidate for the office of President of the United States in 2016. John Kasich is the governor of Ohio. He previously served in the Ohio State Senate from 1979 to 1983 and in the U.S. House of Representatives from 1983 to 2001, representing Ohio's 12th congressional District. Kasich also ran unsuccessfully for president of the United States in 2000. Kasich officially announced his bid for the presidency on July 21, 2015, making him the 16th major Republican candidate to enter the race. He made his announcement at Ohio State University in Columbus, Ohio, where he earned a B. A. in political science in 1974. Previously, in March 2014, Kasich said that he was \"just not interested\" in running for the presidency, but in an interview with ABC News on December 7, 2014, he would not explicitly deny plans to run. When asked about the possibility, Kasich responded, \"Well, George, well, look, you know, you knew you were never going to get a good answer out of me here today. \" Kasich has earned both support and criticism from fellow Republicans for his more moderate political philosophy. He supported Common Core education standards, a path to citizenship for illegal immigrants and expansions for Medicaid in Ohio. Kasich's support in his home state could offer him a significant advantage, if he chooses to run, as no candidate who has lost Ohio has been able to win the presidency in over 50 years. In recent candidate rankings, Crowdpac ranked Kasich as an 4.0C (C being conservative) on a scale ranging from 10L to 10C, making him the fourth least conservative Republican presidential candidate. Kasich received a grade of a \"B -/80\" from the Leadership Project for America PAC, a conservative political action committee");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('George Pataki', State::NY, Office::Unelected, Party::Republican);
        $politician->setBio("George Pataki is a Republican candidate for the office of President of the United States in 2016. On May 28, 2015, Pataki announced his presidential bid via a video posted on his campaign website, before speaking to a crowd of supporters in New Hampshire. Pataki served as the governor of New York for three terms between 1995 and 2007. Pataki has since worked for the law firm, Chadbourne & Parke LLP, and founded a consulting firm with his former Chief of Staff John Cahill. Pataki made several trips to New Hampshire at the end of 2014, stating he was \"very seriously\" considering a run for president. In recent candidate rankings, Crowdpac ranked Pataki as a 1.1C (C being conservative) on a scale ranging from 10L to 10C, making him the second least conservative Republican presidential candidate. He received a grade of \"D -/61\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        //$politician = $this->politicianRepo->make('Rand Paul', State::KY, Office::Senator, Party::Republican);
        //$politician->setBio("Rand Paul is a Republican candidate for the office of President of the United States in 2016. Paul is a Republican member of the U.S. Senate from the state of Kentucky. Prior to being elected to Congress in 2010, Paul worked as an ophthalmologist. As speculation swirled as to whether or not Paul would announce in early April, his campaign released a video on April 6, 2015, indicating an announcement would be made on April 7, 2015, at a rally in Louisville, Ky. Two hours before the rally, his website was updated with the following quote from Paul, \"I am running for president to return our country to the principles of liberty and limited government. \" Previously, on December 8, 2013, Paul said that his family would determine whether or not he would run for president, claiming, \"The thought has crossed my mind... I'm not ready to make a decision t. \" Former Texas Rep. Ron Paul (R), Rand Paul's father, ran for the presidency three times, including once as a Libertarian in 1988. There have been 16 U. S. senators elected to the presidency, including President Barack Obama(D). In recent candidate rankings, Crowdpac ranked Paul as a 10 + C(C being conservative) on a scale ranging from 10L to 10C, making him the most conservative Republican presidential candidate. Paul received a grade of a \"B -/82\" from the Leadership Project for America PAC, a conservative political action committee.");
        //$politician->setIsPresidentialCandidate(true);
        //$politician->save();

        $politician = $this->politicianRepo->make('Rick Perry', State::TX, Office::Unelected, Party::Republican);
        $politician->setBio("Rick Perry is a Republican candidate for the office of President of the United States in 2016. Rick Perry served as the governor of Texas from December 2000 to January 2015. Perry also ran for the Republican nomination for president of the United States in the 2012 presidential election. Perry announced his candidacy on June 4, 2015, via a video posted to his campaign website. On September 11, 2014, Perry responded to a question about his candidacy in 2016, stating, \"I may not run in 2016, but I've spent the last 20 - plus months preparing. If I don't run, it won't be because I'm not prepared. \"  Prior to the 2016 election, there were 17 presidents who previously served as governors. In recent candidate rankings, Crowdpac ranked Perry as a 7.0C(C being conservative) on a scale ranging from 10L to 10C, making him the fifth most conservative Republican presidential candidate. Perry received a grade of a \"B / 84\" from the Leadership Project for America PAC, a conservative political action committee. ");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        //$politician = $this->politicianRepo->make('Marco Rubio', State::FL, Office::Senator, Party::Republican);
        //$politician->setBio("Marco Rubio is a Republican candidate for the office of President of the United States in 2016. On April 13, 2015, Rubio announced his presidential run on a conference call with donors. He referred to himself as \"uniquely qualified\" for the nomination. The call came hours before a scheduled campaign rally in Miami. Rubio is a Republican member of the U. S. Senate from the state of Florida. He was first elected in 2010. Rubio was a member of the Florida House of Representatives from 2000 to 2008. Previously, in May 2014, when ABC reporter Jonathan Karl asked Rubio if he thought he was ready to be president, Rubio said, “I do … but I think that's true for multiple other people that would want to run … I mean, I'll be 43 this month, but the other thing that perhaps people don't realize, I've served now in public office for the better part of 14 years. Most importantly, I think a president has to have a clear vision of where the country needs to go and clear ideas about how to get it there and I think we're very blessed in our party to have a number of people that fit that criteria. \" Sixteen senators have been elected to the presidency, including President Barack Obama. In recent candidate rankings, Crowdpac ranked Rubio as a 6.5C(C being conservative) on a scale ranging from 10L to 10C, making him the eighth most conservative Republican presidential candidate. Rubio received a grade of a \"A -/92\" from the Leadership Project for America PAC, a conservative political action committee. ");
        //$politician->setIsPresidentialCandidate(true);
        //$politician->save();

        $politician = $this->politicianRepo->make('Rick Santorum', State::PA, Office::Unelected, Party::Republican);
        $politician->setBio("Rick Santorum is a candidate for the office of President of the United States in 2016. On May 27, 2015, Santorum announced his presidential run in Butler, Pennsylvania. Santorum served as a U. S. senator from Pennsylvania from January 3, 1995, to January 3, 2007. He also served as a member of the United States House of Representatives from Pennsylvania's 18th Congressional District from January 3, 1991, to January 3, 1995.[3] He ran for the Republican presidential nomination in 2012, but he ended his campaign on April 10, 2012. During a December 2014 interview with The Washington Post, Santorum indicated that he would run in 2016. He said, \"America loves an underdog. We're definitely the underdog in this race. \" Sixteen senators have been elected to the presidency, including President Barack Obama. In recent candidate rankings, Crowdpac ranked Santorum as a 4.8C (C being conservative) on a scale ranging from 10L to 10C, making him the eleventh most conservative Republican presidential candidate. Santorum received a grade of a \"B -/81\" from the Leadership Project for America PAC, a conservative political action committee. ,'18th'");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Donald Trump', State::NY, Office::Unelected, Party::Republican);
        $politician->setBio("Donald Trump is a Republican candidate for the office of President of the United States in 2016. On June 16, 2015, Trump announced his bid for the presidency at Trump Tower in New York City. Trump said, \"I am officially running for president of the United States, and we are going to make our country great again. \" In recent candidate rankings, Crowdpac ranked Trump as a 0.4L(L being liberal) on a scale ranging from 10L to 10C, making him the least conservative Republican presidential candidate and slightly more liberal than Democratic candidate Lincoln Chafee. He received a grade of \"F / 57\" from the Leadership Project for America PAC, a conservative political action committee. ");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();

        $politician = $this->politicianRepo->make('Scott Walker', State::WI, Office::Governor, Party::Republican);
        $politician->setBio("Scott Walker is a candidate for the office of President of the United States in 2016. He announced his candidacy on July 13, 2015. Walker is the 45th Governor of Wisconsin and was first elected to the office in 2010. During his first term, Walker proposed Wisconsin Act 10, which restricted the ability of public workers to engage in public bargaining. The act drew massive protests, mainly organized by unions. Opponents of the measure successfully forced Walker to face a recall election on June 5, 2012. Walker survived the recall election, defeating Tom Barrett(D) 53 percent to 46 percent. In doing so, Walker became the first governor to survive a recall. He then won re - election on November 4, 2014. Prior to serving as governor, Walker was a member of the Wisconsin State Assembly from 1993 to 2002 and Milwaukee County Executive from 2002 to 2010. He attended Marquette University, but he did not earn his bachelor's degree, choosing instead to leave school for a job with the American Red Cross during his senior year. He explained the decision saying, \"The reason I went to college, in large part, was not just to get an education for an education's sake, but to get a job. Someday, maybe in the next few years, I'll embark on finishing my degree.” Walker filed paperwork with the Federal Election Commission on July 2, 2015. However, he did not officially announce his campaign until July 13, 2015. Walker released an early morning video on social media confirming his run for the presidency. Previously, when asked on December 1, 2013, if he was considering entering the presidential race, Walker said, \"I'm running for governor... we'll see what happens after that. I've got to look at my state... for now I'm focused on being governor.\" Then, on February 5, 2015, when Martha Raddatz asked if he will run for president, Walker said, \"I'll just tell you one thing. After three elections for governor in four years in a state that hasn't gone Republican since 1984 for president, I wouldn't bet against me on anything.\" In recent candidate rankings, Crowdpac ranked Walker as an 8.8C(C being conservative) on a scale ranging from 10L to 10C, making him the third most conservative Republican presidential candidate. Walker received a grade of a \"A-/91\" from the Leadership Project for America PAC, a conservative political action committee.");
        $politician->setIsPresidentialCandidate(true);
        $politician->save();
    }

    private function seedCongress()
    {
        $client = new Client();

        $response = $client->get('https://www.govtrack.us/api/v2/role?current=true&limit=600');
        $json     = json_decode($response->getBody())->objects;

        foreach ($json as $politicianJson)
        {
            $firstName  = $politicianJson->person->firstname;
            $middleName = $politicianJson->person->middlename;
            $lastName   = $politicianJson->person->lastname;

            if (empty($middleName))
                $name = $firstName . ' ' . $lastName;
            else
                $name = $firstName . ' ' . $middleName . ' ' . $lastName;

            $district      = $politicianJson->district;
            $party         = $politicianJson->party;
            $roleTypeLabel = $politicianJson->role_type_label;
            $state         = $politicianJson->state;
            $bioGuideId    = $politicianJson->person->bioguideid;
            $govTrackId    = $politicianJson->person->id;

            $politician = $this->politicianRepo->make($name, $state, $roleTypeLabel, $party, $district, $bioGuideId, $govTrackId);

            if ($politician->getName() == 'Bernard Sanders' || $politician->getName() == 'Ted Cruz' || $politician->getName() == 'Lindsey O. Graham' || $politician->getName() == 'Rand Paul' || $politician->getName() == 'Marco Rubio')
            {
                $politician->setIsPresidentialCandidate(true);
                $this->politicianRepo->save($politician);
            }
        }
    }

    private function seedBios()
    {
        foreach ($this->bios as $bio)
        {
            echo $bio;
        }
    }

    private $bios = [
        [
            'govTrackId' => 400034,
            'bio'        => "BLUNT, Roy, a Senator and a Representative from Missouri; born in Niangua, Webster County, Mo., January 10, 1950; graduated Southwest Baptist University, Bolivar, Mo., B.A., 1970; graduated Missouri State University, Springfield, Mo., M.A., 1972; high school history teacher; clerk and chief election officer, Greene County, Mo. 1973-1984; Missouri state secretary of state 1984-1993; president, Southwest Baptist University, Bolivar, Mo. 1993-1996; elected as a Republican to the One Hundred Fifth and to the six succeeding Congresses (January 3, 1997-January 3, 2011); majority whip (One Hundred Eighth through One Hundred Ninth Congresses); acting majority leader (One Hundred Ninth Congress, September 28, 2005-February 2, 2006); minority whip (One Hundred Tenth Congress); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017; vice-chair, Republican Conference (2012-); chair, Committee on Rules and Administration (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400040,
            'bio'        => "BOOZMAN, John, a Senator and a Representative from Arkansas; born in Shreveport, La., December 10, 1950; graduated from Northside High School, Fort Smith, Ark.; attended the University of Arkansas, Fayetteville, Ark., 1969-1972; graduated Southern College of Optometry, 1977; optometrist; business owner; rancher; member of the Rogers, Ark., school board; elected as a Republican to the One Hundred Seventh Congress by special election to fill the vacancy caused by the resignation of United States Representative Asa Hutchinson; reelected to the four succeeding Congresses (November 20, 2001-January 3, 2011); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 400054,
            'bio'        => "BURR, Richard M., a Senator and a Representative from North Carolina; born in Charlottesville, Albemarle County, Va., November 30, 1955; graduated from Reynolds High School, Winston-Salem, N.C., 1974; B.A., Wake Forest University, Winston-Salem, N.C., 1978; unsuccessful candidate for election to the One Hundred Third Congress in 1992; elected as a Republican to the One Hundred Fourth and to the four succeeding Congresses (January 3, 1995-January 3, 2005); was not a candidate for reelection to the House of Representatives, but was elected to the United States Senate in 2004; reelected in 2010 for the term ending January 3, 2017; chair, Select Committee on Intelligence (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400194,
            'bio'        => "ISAKSON, Johnny, a Senator and a Representative from Georgia; born in Atlanta, Fulton County, Ga., December 28, 1944; graduated from the University of Georgia, Athens, Ga., 1966; served in the Georgia Air National Guard 1966-1972; member of the Georgia state general assembly, 1976-1990; unsuccessful candidate for election as Governor of Georgia 1990; member of the Georgia state senate 1993-1996; unsuccessful candidate for election to the United States Senate in 1996; chair of the Georgia board of education 1996; elected as a Republican to the One Hundred Sixth Congress by special election to fill the vacancy created when United States Representative Newt Gingrich did not take his seat in the One Hundred Sixth Congress; reelected to the two succeeding Congresses (February 23, 1999-January 3, 2005); was not a candidate for reelection to the House of Representatives, but was elected to the United States Senate in 2004; reelected in 2010 for the term ending January 3, 2017; chair, Committee on Veterans’ Affairs (One Hundred Fourteenth Congress), Select Committee on Ethics (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400222,
            'bio'        => "KIRK, Mark Steven, a Senator and a Representative from Illinois; born in Champaign, Champaign County, Ill., September 15, 1959; B.A., Cornell University, Ithaca, N.Y., 1981; M.S., London School of Economics, London, England, 1982; J.D., Georgetown University, Washington, D.C., 1992; United States Naval Reserves, 1989 to present; lawyer, private practice; staff member for United States Representative John Porter of Illinois, 1984-1990; special assistant, United States Department of State, 1992-1993; staff member for United States House of Representatives International Relations Committee, 1995; elected as a Republican to the One Hundred Seventh and to the four succeeding Congresses, and served from January 3, 2001, until his resignation on November 29, 2010; was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in the November 2, 2010, special election to the term ending January 3, 2011, a seat previously held by appointed Senator Roland Burris, and at the same time elected in the general election for the six-year term ending January 3, 2017; took the oath of office on November 29, 2010."
        ],
        [
            'govTrackId' => 400284,
            'bio'        => "MORAN, Jerry, a Senator and a Representative from Kansas; born in Great Bend, Barton County, Kans., May 29, 1954; attended Plainville High School, Plainville, Kans.; graduated University of Kansas, Lawrence, Kans., B.S., 1976; graduated Kansas University School of Law, Lawrence, Kans., J.D., 1981; M.B.A. candidate, Fort Hays State University, Hays, Kans.; bank officer; instructor, Fort Hays State University, Hays, Kans.; member of the Kansas state senate 1989-1997, serving as vice president 1993-1995, majority leader 1995-1997; Kansas state special assistant attorney general 1982-1985; deputy attorney, Rooks County, Kans. 1987-1995; University of Kansas School of Law, Lawrence, Kans., board of governors, serving as vice president 1993-1994, and as president 1994-1995; board of directors, Kansas chamber of commerce and industry 1996-1997; elected as a Republican to the One Hundred Fifth Congress and to the six succeeding Congresses (January 3, 1997-January 3, 2011); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017; chair, National Republican Senatorial Committee (2012-2014)."
        ],
        [
            'govTrackId' => 400325,
            'bio'        => "PORTMAN, Robert Jones (Rob), a Senator and a Representative from Ohio; born in Cincinnati, Hamilton County, Ohio, December 19, 1955; graduated from the Cincinnati Country Day School, Cincinnati, Ohio; graduated Dartmouth College, Hanover, N.H., B.A., 1979; graduated University of Michigan School of Law, Ann Arbor, Mich., J.D., 1984; associate counsel to President George H. W. Bush 1989; deputy assistant and director, Office of Legislative Affairs, White House Office 1989-1991; elected as a Republican to the One Hundred Third Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Willis D. Gradison, Jr.; reelected to the six succeeding Congresses until his resignation on April 29, 2005 (May 4, 1993-April 29, 2005); U.S. Trade Representative, in the cabinet of President of George W. Bush 2005-2006; Director, Office of Management and Budget, in the cabinet of President George W. Bush 2006-2007; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 400408,
            'bio'        => "TOOMEY, Patrick Joseph, a Senator and a Representative from Pennsylvania; born in Providence, Providence County, R.I., November 17, 1961; graduated from LaSalle Academy, Providence, R.I.; graduated Harvard University, Cambridge, Mass., B.A., 1984; elected to Allentown, Pa., Government Study Commission 1994; elected as a Republican to the One Hundred Sixth and to the two succeeding Congresses (January 3, 1999-January 3, 2005); was not a candidate for reelection in 2004, but was an unsuccessful candidate for nomination to the United States Senate; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 400418,
            'bio'        => "VITTER, David, a Senator and a Representative from Louisiana; born in New Orleans, Orleans Parish, La., May 3, 1961; A.B., Harvard University, Cambridge, Mass., 1983; Rhodes Scholar; B.A., Oxford University, Oxford, England, 1985; J.D., Tulane University School of Law, New Orleans, La., 1988; member of the Louisiana state house of representatives, 1992-1999; elected as a Republican to the One Hundred Sixth Congress by special election, to fill the vacancy caused by the resignation of United States Representative Robert L. Livingston, Jr.; reelected to the two succeeding Congresses (May 29, 1999-January 3, 2005); was not a candidate for reelection to the House of Representatives, but was elected to the United States Senate in 2004; reelected in 2010 for the term ending January 3, 2017; chair, Committee on Small Business and Entrepreneurship (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300030,
            'bio'        => "CRAPO, Michael Dean, a Senator and a Representative from Idaho; born in Idaho Falls, Bonneville County, Idaho, May 20, 1951; graduated Idaho Falls High School 1969; B.A., Brigham Young University 1973; J.D., Harvard University School of Law 1977; admitted to the bar in 1977; law clerk to Judge James M. Carter, United States Court of Appeals, Ninth Circuit 1977-1978; practiced law in San Diego 1978-1979, and in Idaho Falls 1979-1992; vice chair, Bonneville County Republican Committee 1979-1981; vice chair, Legislative District 29 Republican Committee 1982-1984; Idaho State senator 1985-1992; elected as a Republican to the One Hundred Third and to the two succeeding Congresses (January 3, 1993-January 3, 1999); was not a candidate for reelection to the U.S. House of Representatives, but was elected to the United States Senate in 1998; reelected in 2004 and again in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 300048,
            'bio'        => "GRASSLEY, Charles Ernest, a Senator and a Representative from Iowa; born in New Hartford, Butler County, Iowa, September 17, 1933; attended the public schools; graduated, University of Northern Iowa, Cedar Falls 1955; received a graduate degree from the same university in 1956; pursued graduate work, University of Iowa, Iowa City 1957-1958; engaged in agriculture; part-time university instructor; member, Iowa house of representatives 1959-1974; elected in 1974 as a Republican to the Ninety-fourth Congress; reelected to the Ninety-fifth and Ninety-sixth Congresses (January 3, 1975-January 3, 1981); was not a candidate in 1980 for reelection to the House of Representatives, but was elected to the Senate in 1980; reelected in 1986, 1992, 1998, 2004 and again in 2010 for the term ending January 3, 2017; chair, Special Committee on Aging (One Hundred Fifth Congress), Committee on Finance (One Hundred Seventh Congress [January 20 to June 6, 2001], One Hundred Eighth and One Hundred Ninth Congresses), Committee on the Judiciary (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300071,
            'bio'        => "McCAIN, John Sidney, III, a Senator and a Representative from Arizona; born in Panama Canal Zone, August 29, 1936; attended schools in Alexandria, Va.; graduated, United States Naval Academy, Annapolis, Md. 1958, and the National War College, Washington, D.C. 1973; pilot, United States Navy 1958-1981, prisoner of war in Vietnam 1967-1973; received numerous awards, including the Silver Star, Legion of Merit, Purple Heart, and Distinguished Flying Cross; elected as a Republican in 1982 to the Ninety-eighth Congress; reelected to the Ninety-ninth Congress in 1984 and served from January 3, 1983, to January 3, 1987; elected to the United States Senate in 1986; reelected in 1992, 1998, 2004, and again in 2010 for the term ending January 3, 2017; chair, Committee on Indian Affairs (One Hundred Fourth Congress; One Hundred Ninth Congress), Committee on Commerce, Science, and Transportation (One Hundred Fifth through One Hundred Sixth Congresses, One Hundred Seventh Congress [January 20, 2001-June 6, 2001], One Hundred Eighth Congress), Committee on Armed Services (One Hundred Fourteenth Congress); was an unsuccessful candidate for the Republican presidential nomination in 2000; was an unsuccessful Republican nominee for President of the United States in 2008."
        ],
        [
            'govTrackId' => 300075,
            'bio'        => "MURKOWSKI, Lisa, (daughter of Frank Hughes Murkowski), a Senator from Alaska; born in Ketchikan, Alaska, on May 22, 1957; attended public schools in Fairbanks, AK; attended Williamette University in Salem, Oregon, 1975-1977; B.A. in Economics, Georgetown University 1980; J.D., Willamette College of Law 1985; attorney; member, Alaska Bar Association; Anchorage District Court attorney 1987-1989; private practice 1989-1996; Mayor’s Task Force on the Homeless 1990-1991; Anchorage Equal Rights Commission 1997-1998; Alaska State house of representatives 1999-2002; appointed to the U.S. Senate on December 20, 2002, to fill the vacancy caused by the resignation of her father, Frank H. Murkowski; elected to the U.S. Senate in 2004; unsuccessful candidate for renomination in 2010, but subsequently elected as a write-in candidate in the November 2, 2010, general election, for the term ending January 3, 2017; Republican Conference vice-chair (2009-2010); chair, Committee on Energy and Natural Resources (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300089,
            'bio'        => "SHELBY, Richard C., a Senator and a Representative from Alabama; born in Birmingham, Ala., May 6, 1934; attended the public schools; graduated, University of Alabama 1957; graduated, University of Alabama School of Law 1963; admitted to the Alabama bar in 1961 and commenced practice in Tuscaloosa; city prosecutor, Tuscaloosa 1963-1971; United States Commissioner, Northern District of Alabama 1966-1970; member, Alabama State senate 1970-1978; elected as a Democrat to the Ninety-sixth Congress in 1978; reelected to the three succeeding Congresses and served from January 3, 1979, to January 3, 1987; was not a candidate for reelection to the House of Representatives in 1986, but was elected to the United States Senate; reelected in 1992, 1998, 2004, and again in 2010 for the term ending January 3, 2017; changed from the Democratic to the Republican Party in 1994; chair, Select Committee on Intelligence (One Hundred Fifth and One Hundred Sixth Congresses, One Hundred Seventh Congress [January 20, 2001-June 6, 2001]), Committee on Banking, Housing and Urban Affairs (One Hundred Eighth and One Hundred Ninth Congresses, One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400546,
            'bio'        => "THUNE, John, a Senator and a Representative from South Dakota; born in Pierre, Hughes County, S. Dak., January 7, 1961; graduated from Jones County High School, S. Dak., 1979; B.S., Biola University, La Mirada, Calif., 1983; M.B.A., University of South Dakota, Vermillion, S. Dak., 1984; executive director, South Dakota state municipal league; board of directors, National League of Cities; staff, United States Senator James Abdnor of South Dakota 1985-1986; South Dakota state Republican party executive director 1989-1991; director, South Dakota state railroad division 1991-1993; director, South Dakota state municipal league 1993-1996; elected as a Republican to the One Hundred Fifth and to the two succeeding Congresses (January 3, 1997-January 3, 2003); was not a candidate for reelection to the One Hundred Eighth Congress in 2002, but was an unsuccessful candidate for the United States Senate; elected as a Republican to the U.S. Senate in 2004; reelected in 2010 for the term ending January 3, 2017; vice-chair, Republican Conference (2009); chair, Republican Policy Committee (2009-2012); chair, Republican Conference (2012-); chair, Committee on Commerce, Science, and Transportation (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300002,
            'bio'        => "ALEXANDER, Lamar, a Senator from Tennessee; born in Maryville, Tennessee, on July 3, 1940; B.A., Vanderbilt University 1962; J.D., New York University Law School 1965; governor of Tennessee 1979-1987; chairman of the National Governors Association 1985-1986; U.S. secretary of education 1991-1993; elected as a Republican to the U.S. Senate in 2002; reelected in 2008, and again in 2014 for the term ending January 3, 2021; chair, Republican Conference (2008-2012); chair, Committee on Health, Education, Labor, and Pensions (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 402675,
            'bio'        => "COATS, Daniel Ray, a Senator and a Representative from Indiana; born in Jackson, Jackson County, Mich., May 16, 1943; attended the public schools; graduated Jackson High School, 1961; graduated Wheaton College, Wheaton, Ill., B.A., 1965; graduated Indiana University School of Law, Indianapolis, J.D., 1971; admitted to the Indiana bar in 1972 and commenced practice in Fort Wayne; served in the United States Army 1966-1968; district representative, United States Congressman J. Danforth Quayle 1976-1980; elected as a Republican to the Ninety-seventh and to the three succeeding Congresses (January 3, 1981-January 3, 1989); elected to the One Hundred First Congress but did not serve; appointed on December 12, 1988, to the United States Senate to fill the vacancy caused by the election of J. Danforth Quayle as Vice President, and took the oath of office on January 3, 1989; elected by special election in 1990 to the remainder of the term; reelected for a full term in 1992, and served from January 3, 1989, to January 3, 1999; was not a candidate for reelection in 1998; special counsel, law firm of Verner, Liipfert, Bernhard, MacPherson and Hand; U.S. Ambassador to the Federal Republic of Germany 2001-2005; again elected to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412491,
            'bio'        => "RUBIO, Marco, a Senator from Florida; born in Miami, Fla., May 28, 1971; graduated University of Florida, B.S., 1993; graduated University of Miami, J.D., 1996; lawyer; West Miami City Commission 1998-2000; member of the Florida house of representatives 2000-2008; majority leader 2003-2006; speaker 2006-2008; elected as a Republican to the United States Senate for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412492,
            'bio'        => "PAUL, Rand, (son of Ronald Ernest Paul), a Senator from Kentucky; born in Pittsburgh, Pa., January 7, 1963; attended Baylor University, 1981-1984; graduated Duke University, M.D., 1988; ophthalmologist; elected as a Republican to the United States Senate for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412493,
            'bio'        => "AYOTTE, Kelly, a Senator from New Hampshire; born in Nashua, N.H., June 27, 1968; graduated Pennsylvania State University, B.A., 1990; graduated Villanova University, J.D., 1993; law clerk to New Hampshire Supreme Court Justice Sherman Horton; lawyer; prosecutor, New Hampshire attorney general’s office 1998-2000; staff, New Hampshire attorney general 2000-2003; counsel to New Hampshire Governor Craig Benson 2003; deputy attorney general of New Hampshire 2003-2004; attorney general of New Hampshire 2004-2009; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412494,
            'bio'        => "HOEVEN, John, a Senator from North Dakota; born in Bismarck, N.D., March 13, 1957; graduated Dartmouth College, B.A., 1979; graduated Northwestern University, M.B.A., 1981; bank president and CEO; governor of North Dakota 2000-2010; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412495,
            'bio'        => "LEE, Mike, a Senator from Utah; born in Mesa, Ariz., June 4, 1971; graduated Brigham Young University, B.A., 1994; graduated Brigham Young University, J.D., 1997; law clerk to 3rd Circuit Court of Appeals Justice Samuel Alito 1998; lawyer; assistant U.S. attorney 2002-2005; counsel to Utah Governor John Huntsman 2005-2006; law clerk to United States Supreme Court Justice Samuel Alito 2006-2007; lawyer; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412496,
            'bio'        => "JOHNSON, Ron, a Senator from Wisconsin; born on April 8, 1955, in Mankato, Minn.; graduated University of Minnestota, B.S., 1977; studied business administration, University of Minnesota, 1977-1979; plastics manufacturer; accountant; elected as a Republican to the United States Senate in 2010 for the term ending January 3, 2017; chair, Committee on Homeland Security and Governmental Affairs (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400432,
            'bio'        => "WICKER, Roger F., a Senator and a Representative from Mississippi; born in Pontotoc, Pontotoc County, Miss., July 5, 1951; graduated Pontotoc High School, Pontotoc, Miss., 1969; B.A., University of Mississippi, University, Miss., 1973; J.D., University of Mississippi, University, Miss. 1975; Air Force Reserve Officer Training Corps; United States Air Force 1976-1980; United States Air Force Reserve 1980-2003; staff for United States Representative Trent Lott of Mississippi, House Committee on Rules 1980-1982; Tupelo, Miss., judge pro tem; Lee County, Miss., public defender 1984-1987; member of the Mississippi state senate 1988-1994; elected as a Republican to the One Hundred Fourth and to the six succeeding Congresses (January 3, 1995-December 31, 2007); resigned on December 31, 2007, to accept appointment to the Senate; appointed to the U.S. Senate on December 31, 2007, to fill the seat left vacant by the resignation of Chester Trent Lott; took oath of office on December 31, 2007; elected in 2008 in a special election for the term ending January 3, 2013; reelected in 2012 for the term ending January 3, 2019; chair, National Republican Senatorial Committee (2015-)."
        ],
        [
            'govTrackId' => 412573,
            'bio'        => "CRUZ, Rafael Edward (Ted), a Senator from Texas; born in Calgary, Alberta, Canada, December 22, 1970; graduated Princeton University, B.A., 1992; graduated Harvard University, J.D., 1995; law clerk to Chief Justice of the United States William Rehnquist; associate deputy attorney general, U.S. Department of Justice; director of the Office of Policy Planning, Federal Trade Commission; solicitor general of Texas 2003-2008; lawyer; elected as a Republican to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412556,
            'bio'        => "FISCHER, Debra (Deb), a Senator from Nebraska; born in Lincoln, Neb., March 1, 1951; graduated University of Nebraska, B.S., 1988; rancher; Valentine Rural High School Board of Education 1990-2004; Nebraska Coordinating Commission for Postsecondary Education 2000-2004; Nebraska Unicameral Legislature 2005-2012; elected as a Republican to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412251,
            'bio'        => "BARRASSO, John A., a Senator from Wyoming; born on July 21, 1952, in Reading, Penn.; graduated Georgetown University, Washington, D.C., B.S. 1974; graduated Georgetown University School of Medicine, M.D. 1978; residency at Yale Medical School, New Haven, Conn.; orthopedic surgeon, private practice; chief of staff of the Wyoming Medical Center, Casper, Wyo.; Wyoming State senate 2002-2007; appointed to the United States Senate on June 22, 2007, to fill the vacancy caused by the death of Craig L. Thomas; took the oath of office on June 25, 2007; elected in 2008 in a special election for the term ending January 3, 2013; reelected in 2012 for the term ending January 3, 2019; vice-chair, Republican Conference (2010-2012); chair, Republican Policy Committee (2012-); chair, Committee on Indian Affairs (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 412248,
            'bio'        => "CORKER, Robert (Bob), a Senator from Tennessee; born in Orangeburg, S.C., August 24, 1952; attended the public schools in Chattanooga, Tenn.; graduated with a bachelor of science degree in industrial management, University of Tennessee 1974; commercial real estate developer; construction company owner; unsuccessful candidate for the United States Senate 1994; commissioner, Tennessee Finance and Administration Department 1995-1996; mayor of Chattanooga 2001-2005; elected as a Republican to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019; chair, Committee on Foreign Relations (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 412218,
            'bio'        => "HELLER, Dean, a Senator and a Representative from Nevada; born in Castro Valley, Alameda County, Calif., May 10, 1960; graduated from Carson High School, Carson City, Nev.; B.S., University of Southern California, Los Angeles, Calif., 1985; member of the Nevada state assembly 1990-1994; Nevada secretary of state 1995-2007; elected as a Republican to the One Hundred Tenth and to the two succeeding Congresses, and served from January 3, 2007, to May 9, 2011, when he resigned to become a U.S. senator; appointed May 3, 2011, to the United States Senate for the term ending January 3, 2013, to fill the vacancy caused by the resignation of John E. Ensign; took the oath of office on May 9, 2011; subsequently elected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 300052,
            'bio'        => "HATCH, Orrin Grant, a Senator from Utah; born in Homestead Park, Allegheny County, Pa., March 22, 1934; received early education in the public schools of Pittsburgh, Pa.; graduated, Brigham Young University 1959; graduated, University of Pittsburgh Law School 1962; admitted to the Pennsylvania bar in 1963 and commenced practice in Pittsburgh; moved to Utah in 1969 and continued practicing law; elected as a Republican to the United States Senate in 1976; reelected in 1982, 1988, 1994, 2000, 2006, and again in 2012 for the term ending January 3, 2019; president pro tempore (2015-); chairman, Committee on Labor and Human Resources (Ninety-seventh to Ninety-ninth Congresses), Committee on the Judiciary (One Hundred Fourth to One Hundred Sixth Congresses; One Hundred Seventh Congress [January 20, 2001-June 6, 2001], One Hundred Eighth Congress), Committee on Finance (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400134,
            'bio'        => "FLAKE, Jeff, a Senator and a Representative from Arizona; born in Snowflake, Navajo County, Ariz., December 31, 1962; graduated from Brigham Young University, Provo, Utah, 1986; M.A. Brigham Young University, Provo, Utah, 1987; elected as a Republican to the One Hundred Seventh and to the five succeeding Congresses (January 3, 2001-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 300023,
            'bio'        => "COCHRAN, William Thad, a Senator and a Representative from Mississippi; born in Pontotoc, Pontotoc County, Miss., December 7, 1937; educated in the public schools of Mississippi; graduated, University of Mississippi, Oxford 1959 and the University of Mississippi Law School 1965; studied international law and jurisprudence at Trinity College, University of Dublin, Ireland 1963-1964; served in the United States Navy 1959-1961; admitted to the Mississippi bar in 1965 and commenced practice in Jackson; elected as a Republican to the Ninety-third Congress in 1972; reelected to the Ninety-fourth and Ninety-fifth Congresses and served from January 3, 1973, until his resignation on December 26, 1978; was not a candidate for reelection to the House of Representatives, but was elected in 1978 to the United States Senate for the term commencing January 3, 1979; subsequently appointed by the Governor, December 27, 1978, to fill the vacancy caused by the resignation of James O. Eastland for the term ending January 3, 1979; reelected in 1984, 1990, 1996, 2002, 2008, and again in 2014 for the term ending January 3, 2021; chair, Senate Republican Conference (1991-1997), Committee on Agriculture, Nutrition, and Forestry (One Hundred Eighth Congress); Committee on Appropriations (One Hundred Ninth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 300025,
            'bio'        => "COLLINS, Susan Margaret, a Senator from Maine; born in Caribou, Aroostook County, Maine, December 7, 1952; graduated from St. Lawrence University, Canton, NY 1975; worked for United States Senator William S. Cohen 1975-1987, serving as staff director of the Senate Governmental Affairs Subcommittee on the Oversight of Government Management 1981-1987; commissioner of the Maine Department of Professional and Financial Regulation 1987-1992; New England regional director, United States Small Business Administration 1992; served as deputy state treasurer of Massachusetts, 1993; won an eight-way Republican primary to become the first woman nominated for governor of Maine in 1994, but lost general election; elected as a Republican to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021; chair, Committee on Governmental Affairs (One Hundred Eighth Congress), Committee on Homeland Security and Governmental Affairs (One Hundred Ninth Congress); Special Committee on Aging (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300027,
            'bio'        => "CORNYN, John, a Senator from Texas; born in Houston, Texas, on February 2, 1952; B.A., Trinity University 1973; J.D., St. Mary’s School of Law 1977; LLM, University of Virginia 1995; attorney; Bexar County district court judge 1984-1990; Texas supreme court 1990-1997; Texas state attorney general 1999-2002; elected as a Republican to the U.S. Senate in 2002; subsequently appointed to the remainder of the term left vacant by the resignation of William Philip Gramm, and took the oath of office on December 2, 2002; reelected in 2008, and again in 2014 for the term ending January 3, 2021; Republican Conference vice-chair (2007-2009); chair, National Republican Senatorial Committee (2009-2012); Republican party whip (2013-)."
        ],
        [
            'govTrackId' => 300041,
            'bio'        => "ENZI, Michael B., a Senator from Wyoming; born in Bremerton, Wash., February 1, 1944; attended public schools of Thermopolis and Sheridan, Wyo.; graduated, Sheridan High School 1962; received degree in accounting, George Washington University 1966; M.B.A. in retail marketing from Denver University 1968; served in Wyoming National Guard 1967-73; owned and operated family shoe stores in Gillette and Sheridan, Wyo., and Miles City, Mont.; accountant; Certified Professional in Human Resources, 1993-present; Mayor of Gillette 1975-1982; member, Wyoming house of representatives 1987-1991; member, Wyoming state senate 1991-1996; commissioner, Western Interstate Commission for Higher Education 1995-1996; elected as a Republican to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021; chair, Committee on Health, Education, Labor, and Pensions (One Hundred Ninth Congress), Committee on Budget (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300047,
            'bio'        => "GRAHAM, Lindsey O., a Senator and a Representative from South Carolina; born in Central, Pickens County, S.C., July 9, 1955; graduated from Daniel High School, Central, S.C. 1973; B.A., University of South Carolina, Columbia 1977; J.D., University of South Carolina School of Law 1981; United States Air Force 1982-1988; South Carolina Air National Guard 1989-1995; United States Air Force Reserves 1995-present; lawyer, private practice; assistant county attorney, Oconee County, S.C. 1988-1992; city attorney for Central, S.C. 1990-1994; member of the South Carolina state house of representatives 1992-1994; elected as a Republican to the House of Representatives for the One Hundred Fourth and to the three succeeding Congresses (January 3, 1995-January 3, 2003); one of the managers appointed by the House of Representatives in 1998 to conduct the impeachment proceedings against President William Clinton; was not a candidate for reelection in 2002, but was elected as a Republican to the U.S. Senate in 2002; reelected in 2008, and again in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 300055,
            'bio'        => "INHOFE, James Mountain, a Senator and a Representative from Oklahoma; born in Des Moines, Iowa, November 17, 1934; attended public schools in Tulsa, Okla.; B.A., University of Tulsa 1973; served in the U.S. Army 1957-1958; president, Quaker Life Insurance Company; member, Oklahoma State house of representatives 1967-1969; State senate 1969-1977; unsuccessful candidate for Governor of Oklahoma 1974, and for the U. S. House of Representatives 1976; mayor of Tulsa 1978-1984; elected as a Republican to the One Hundredth and to the three succeeding Congresses and served from January 3, 1987, to November 15, 1994, when he resigned, having been elected to the United States Senate in the November 8, 1994, special election to the unexpired portion of the term ending January 3, 1997, left vacant by the resignation of David L. Boren; took the oath of office on November 17, 1994; elected for a full term in 1996; reelected in 2002, 2008, and again 2014 for the term ending January 3, 2021; chair, Committee on Environment and Public Works (One Hundred Eighth, One Hundred Ninth, and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 300072,
            'bio'        => "McCONNELL, Addison Mitchell (Mitch), a Senator from Kentucky; born in Tuscumbia, Colbert County, Ala., February 20, 1942; attended Louisville, Ky. public schools; graduated, University of Louisville 1964; graduated, University of Kentucky Law School, Lexington 1967; admitted to the Kentucky bar in 1967; legislative assistant to Senator Marlow Cook 1968-1970; Deputy Assistant United States Attorney for Legislative Affairs 1974-1975; Acting Assistant Attorney General 1975; elected judge-executive of Jefferson County, Ky., 1978-1985; elected as a Republican to the United States Senate in 1984; reelected in 1990, 1996, 2002, 2008, and again in 2014 for the term ending January 3, 2021; Republican party whip (2003-2007); minority leader (2007-2015); majority leader (2015-); chair, Select Committee on Ethics (One Hundred Fourth Congress), National Republican Senatorial Campaign Committee (One Hundred Fifth through One Hundred Sixth Congresses), Committee on Rules and Administration (One Hundred Sixth Congress, One Hundred Seventh Congress [January 20, 2001-June 6, 2001])."
        ],
        [
            'govTrackId' => 300083,
            'bio'        => "ROBERTS, Charles Patrick (Pat), a Senator and a Representative from Kansas; born in Topeka, Kans., April 20, 1936; attended the public schools; graduated from Holton High School 1954; B.A., Kansas State University, Manhattan 1958; served in the U.S. Marine Corps as a captain 1958-1962; newspaper publisher, Litchfield Park, Ariz. 1962-1967; administrative assistant, United States Senator Frank Carlson 1967-1968; administrative assistant, United States Congressman Keith Sebelius 1968-1980; elected as a Republican to the Ninety-seventh and to the seven succeeding Congresses (January 3, 1981-January 2, 1997); chair, Committee on Agriculture (One Hundred Fourth Congress); not a candidate for reelection to the House of Representatives in 1996, but was elected as a Republican to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021; chair, Select Committee on Ethics (One Hundred Sixth and One Hundred Seventh Congresses [November 9, 1999-January 3, 2001; January 20, 2001-June 6, 2001]), Select Committee on Intelligence (One Hundred Eighth and One Hundred Ninth Congresses), Committee on Agriculture, Nutrition, and Forestry (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300088,
            'bio'        => "SESSIONS, Jefferson Beauregard III (Jeff), a Senator from Alabama; born in Hybart, Ala., December 24, 1946; attended the public schools; graduated from Huntingdon College, Montgomery 1969; graduated from University of Alabama School of Law, Tuscaloosa 1973; admitted to the Alabama bar in 1973, and engaged in the practice of law in Russellville 1973-1975; served in the U.S. Army reserves, attaining the rank of captain 1973-1977; practiced law in Mobile 1977-1981; United States Attorney for the Southern District of Alabama 1981-1993; Alabama Attorney General 1994-1996; elected as a Republican to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 400004,
            'bio'        => "ADERHOLT, Robert, a Representative from Alabama; born in Haleyville, Winston County, Ala., July 22, 1965; B.A., Birmingham Southern College, Birmingham, Ala., 1987; J.D., Samford University, Birmingham, Ala., 1990; lawyer, private practice; Haleyville, Ala., municipal judge, 1992-1995; staff, Alabama Governor Fob James, 1995-1996; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400018,
            'bio'        => "BARTON, Joe Linus, a Representative from Texas; born in Waco, McLennan County, Tex., September 15, 1949; graduated from Waco High School, Waco, Tex., 1968; B.A., Texas A&M University, College Station, Tex., 1972; M.S., Purdue University, West Lafayette, Ind., 1973; business executive; White House Fellowship, served as aide to Secretary of Energy James B. Edwards, 1981-1982; elected as a Republican to the Ninety-ninth and to the fifteen succeeding Congresses (January 3, 1985-present); chair, Committee on Energy and Commerce (One Hundred Eighth and One Hundred Ninth Congresses)."
        ],
        [
            'govTrackId' => 400029,
            'bio'        => "BISHOP, Robert (Rob), a Representative from Utah; born in Kaysville, Utah, July 13, 1951; B.A., University of Utah, Salt Lake City, Utah, 1974; teacher; professional advocate; member of the Utah state house of representatives, 1979-1994, speaker, 1992-1994; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present); chair, Committee on Natural Resources (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400032,
            'bio'        => "BLACKBURN, Marsha, a Representative from Tennessee; born in Laurel, Miss., June 6, 1952; graduated from Northeast Jones High School, Laurel, Miss.; B.S. Mississippi State University, Starkville, Miss., 1973; business owner; private advocate; unsuccessful candidate for election to the One Hundred Third Congress in 1992; member of the Tennessee state senate, 1998-2002; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400036,
            'bio'        => "BOEHNER, John Andrew, a Representative from Ohio; born in Cincinnati, Hamilton County, Ohio, November 17, 1949; graduated from Moeller High School, Cincinnati, Ohio, 1968; B.S., Xavier University, Cincinnati, Ohio, 1977; United States Navy, 1968; businessman; business executive; member of the Union Township, Ohio, board of trustees, 1981, and president, 1984; member of the Ohio state house of representatives, 1985-1990; elected as a Republican to the One Hundred Second and to the twelve succeeding Congresses (January 3, 1991-present); House Republican Conference Chairman, 1995-1999; chair, Committee on Education and the Workforce (One Hundred Seventh through One Hundred Ninth Congresses); majority leader (One Hundred Ninth Congress); minority leader (One Hundred Tenth and One Hundred Eleventh Congress); Speaker of the House (One Hundred Twelfth through One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400046,
            'bio'        => "BRADY, Kevin Patrick, a Representative from Texas; born in Vermillion, Clay County, S. Dak., April 11, 1955; graduated from Rapid City Central High School, Rapid City, S. Dak; B.A., University of South Dakota, Vermillion, S. Dak., 1990; member of the Texas state house of representatives, 1990-1996; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present); chair, Joint Economic Committee (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 400052,
            'bio'        => "BURGESS, Michael C., a Representative from Texas; born in Rochester, Olmsted County, Minn., December 23, 1950; graduated from Selwyn College Preparatory School, Denton, Tex., 1968; B.S., North Texas State University, Denton, Tex., 1972; M.S., North Texas State University, Denton, Tex., 1976; M.D., University of Texas Medical School, Houston, Tex., 1977; M.S., University of Texas, Dallas, Tex., 2000; physician; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400057,
            'bio'        => "CALVERT, Ken, a Representative from California; born in Corona, Riverside County, Calif., June 8, 1953; graduated from Corona High School, Corona, Calif., 1971; A.A., Chaffey College, Rancho Cucamonga, Calif., 1973; B.A., San Diego State University, San Diego, Calif., 1975; restaurant manager; business owner; unsuccessful candidate for nomination to the Ninety-eighth Congress in 1982; chair, Riverside County, Calif., Republican Party, 1984-1988; elected as a Republican to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present)."
        ],
        [
            'govTrackId' => 400061,
            'bio'        => "CAPITO, Shelley Moore, (daughter of Arch Alfred Moore, Jr.), a Senator and a Representative from West Virginia; born in Glendale, Marshall County, W.Va., November 26, 1953; B.S., Duke University, Durham, N.C., 1975; M.Ed., University of Virginia, Charlottesville, Va., 1976; college counselor; member, West Virginia state house of representatives, 1997-2001; elected as a Republican to the One Hundred Seventh and to the six succeeding Congresses (January 3, 2001-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 400068,
            'bio'        => "CARTER, John R., a Representative from Texas; born in Houston, Harris County, Tex., November 6, 1941; graduated from Bellaire High School, Houston, Tex., 1960; B.A., Texas Tech University, Lubbock, Tex., 1964; J.D., University of Texas Law School, Austin, Tex., 1969; lawyer, private practice; judge, District Court of Williamson County, Tex., 1981-2001; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400071,
            'bio'        => "CHABOT, Steve, a Representative from Ohio; born in Cincinnati, Hamilton County, Ohio, January 22, 1953; graduated from LaSalle High School, Cincinnati, Ohio; B.A., College of William and Mary, Williamsburg, Va., 1975; J.D., Salmon P. Chase College of Law, Highland Heights, Ky., 1978; teacher, 1975-1976; member of the Cincinnati, Ohio, city council, 1985-1990; Hamilton County, Ohio, commissioner, 1990-1994; elected as a Republican to the One Hundred Fourth and to the six succeeding Congresses (January 3, 1995-January 3, 2009); one of the managers appointed by the House of Representatives in 1998 to conduct the impeachment proceedings of President William Jefferson Clinton; unsuccessful candidate for reelection to the One Hundred Eleventh Congress in 2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present); chair, Committee on Small Business (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 412670,
            'bio'        => "WALKER, Bradley Mark, a Representative from North Carolina; born in Dothan, Houston County, Ala., May 20, 1969; attended Trinity Baptist College, Jacksonville, Fla., 1987-1988; B.A., Piedmont International University, Winston-Salem, N.C., 1999; businessman; minister; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 400077,
            'bio'        => "COLE, Tom, a Representative from Oklahoma; born in Shreveport, Caddo Parish, La., on April 28, 1949; graduated from Moore High School, Moore, Okla., 1967; B.A., Grinnell College, Grinnell, Iowa, 1971; M.A., Yale University, New Haven, Conn., 1974; Ph.D., University of Oklahoma, Norman, Okla., 1984; consultant; faculty, University of Oklahoma, Norman, Okla.; faculty, Oklahoma Baptist University, Shawnee, Okla.; staff, United States Representative Marvin (Mickey) Edwards of Oklahoma, 1982-1984; chairman, Oklahoma Republican party, 1985-1989; private advocate; member of the Oklahoma state senate, 1988-1991; executive director, National Republican Congressional Committee, 1991-1993; Oklahoma secretary of state, 1995-1999; chief of staff, Republican National Committee, 1999-2001; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400086,
            'bio'        => "CRENSHAW, Ander, a Representative from Florida; born in Jacksonville, Duval County, Fla., September 1, 1944; graduated from Robert E. Lee High School, Jacksonville, Fla., 1962; B.A., University of Georgia, Athens, Ga., 1966; J.D., University of Florida, Gainesville, Fla., 1969; member of the Florida state house of representatives, 1972-1978; member of the Florida state senate, 1986-1994; elected as a Republican to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present)."
        ],
        [
            'govTrackId' => 400089,
            'bio'        => "CULBERSON, John, a Representative from Texas; born in Houston, Harris County, Tex., August 24, 1956; graduated from Lamar High School, Houston, Tex., 1975; B.A., Southern Methodist University, Dallas, Tex., 1981; J.D., South Texas College of Law, Houston, Tex.; member of the Texas state house of representatives, 1986-2001; elected as a Republican to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present)."
        ],
        [
            'govTrackId' => 400108,
            'bio'        => "DIAZ-BALART, Mario, (brother of Lincoln Diaz-Balart), a Representative from Florida; born in Fort Lauderdale, Broward County, Fla., September 25, 1961; attended the University of South Florida, Tampa, Fla.; marketing executive; member of the Florida state house of representatives, 1988-1992, 2000-2002; member of the Florida state senate, 1992-2000; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400116,
            'bio'        => "DUNCAN, John J., Jr., (son of John James Duncan), a Representative from Tennessee; born in Lebanon, Wilson County, Tenn., July 21, 1947; graduated from Holston High School, Knoxville, Tenn.; B.S., University of Tennessee, Knoxville, Tenn., 1969; J.D., National Law Center, George Washington University, Washington, D.C., 1973; lawyer, private practice; Army National Guard, 1970-1987; United States Army Reserve, 1970-1987; state trial judge, Knox County, Tenn., 1981-1988; elected as a Republican to the One Hundredth Congress, by special election, to fill the vacancy caused by the death of his father, John J. Duncan, and simultaneously elected to the One Hundred First Congress; reelected to the One Hundred Second and to the twelve succeeding Congresses (November 8, 1988-present)."
        ],
        [
            'govTrackId' => 400137,
            'bio'        => "FORBES, J. Randy, a Representative from Virginia; born in Chesapeake, Chesapeake County, Va., February 17, 1952; graduated from Great Bridge High School, Chesapeake, Va., 1970; B.A., Randolph-Macon College, Ashland, Va., 1974; J.D., University of Virginia, Charlottesville, Va., 1977; lawyer, private practice; chair, Republican Party of Virginia, 1996-2001; member of the Virginia state house of delegates, 1989-1997; member of the Virginia state senate, 1997-2001; elected as a Republican to the One Hundred Seventh Congress, by special election, to fill the vacancy caused by the death of United States Representative Norman Sisisky, and reelected to the seven succeeding Congresses (June 19, 2001-present)."
        ],
        [
            'govTrackId' => 400141,
            'bio'        => "FRANKS, Trent, a Representative from Arizona; born in Uravan, Montrose County, Colo., June 19, 1957; attended Ottawa University, Ottawa, Kans.; business owner; member of the Arizona state house of representatives, 1985-1987; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400142,
            'bio'        => "FRELINGHUYSEN, Rodney P., (son of Peter Hood Ballantine Frelinghuysen, Jr., great-great grandson of Frederick Frelinghuysen, and great-great-great nephew of Theodore Frelinghuysen), a Representative from New Jersey; born in New York, N.Y., April 29, 1946; graduated from St. Albans School, Washington, D.C., 1964; B.A., Hobart College, Geneva, N.Y., 1969; graduate studies, Trinity College, Hartford, Conn.; United States Army, 1969-1971; state and federal aid coordinator and administrative assistant to board of chosen freeholders, Morris County, N.J., 1972; board of chosen freeholders, Morris County, N.J., 1974-1983, director, 1980; member, New Jersey commission on capital budgeting and planning; member of the New Jersey state general assembly, 1983-1994; member of the Morris County, N.J., Republican Committee; elected as a Republican to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present)."
        ],
        [
            'govTrackId' => 400145,
            'bio'        => "GARRETT, Scott, a Representative from New Jersey; born in Englewood, Bergen County, N.J., July 9, 1959; graduated from High Point Regional High School, Sussex, N.J., 1977; B.A., Montclair State University, Montclair, N.J., 1981; J.D., Rutgers University Law School, Camden, N.J., 1984; lawyer, private practice; member of the New Jersey state general assembly, 1990-2002; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400154,
            'bio'        => "GOODLATTE, Robert William, a Representative from Virginia; born in Holyoke, Hampden County, Mass., September 22, 1952; graduated from Classical High School, Springfield, Mass., 1970; B.A., Bates College, Lewiston, Maine, 1974; J.D., Washington and Lee University, Lexington, Va., 1977; lawyer, private practice; staff, United States Representative M. Caldwell Butler of Virginia, 1977-1979; elected as a Republican to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); one of the managers appointed by the House of Representatives in 2009 to conduct the impeachment proceedings of Samuel B. Kent, judge of the United States District Court for the Southern District of Texas; chair, Committee on Agriculture (One Hundred Eighth and One Hundred Ninth Congresses); chair, Committee on the Judiciary (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400157,
            'bio'        => "GRANGER, Kay, a Representative from Texas; born in Greenville, Hunt County, Tex., January 18, 1943; graduated from Eastern Hills High School, Fort Worth, Tex.; B.S. Texas Wesleyan University, Fort Worth, Tex., 1965; teacher; business owner; member of the Fort Worth, Tex., zoning commission, 1981-1989; member of the Fort Worth, Tex., city council, 1989-1991; mayor of Fort Worth, Tex., 1991-1995; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400158,
            'bio'        => "GRAVES, Samuel, a Representative from Missouri; born in Tarkio, Atchison County, Mo., November 7, 1963; graduated from Tarkio High School, Tarkio, Mo., 1982; B.A., University of Missouri, Columbia, Mo., 1986; member of the Missouri state house of representatives, 1992-1994; member of the Missouri state senate, 1994-2000; elected as a Republican to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present); chair, Committee on Small Business (One Hundred Twelfth and One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 400175,
            'bio'        => "HENSARLING, Jeb, a Representative from Texas; born in Stephenville, Erath County, Tex., May 29, 1957; B.A., Texas A&M University, College Station, Tex., 1979; J.D., University of Texas, Austin, Tex., 1982; lawyer, private practice; staff, United States Senator Phil Gramm of Texas, 1985-1989; business executive; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present); chair, House Republican Conference (One Hundred Twelfth Congress); chair, Committee on Financial Services (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400196,
            'bio'        => "ISSA, Darrell, a Representative from California; born in Cleveland, Cuyahoga County, Ohio, November 1, 1953; B.A., Siena Heights College, Adrian, Mich., 1976; United States Army, 1970-1980; business owner; elected as a Republican to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present); chair, Committee on Oversight and Government Reform (One Hundred Twelfth and One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 400206,
            'bio'        => "JOHNSON, Sam, a Representative from Texas; born in San Antonio, Bexar County, Tex., October 11, 1930; graduated from Woodrow Wilson High School, Dallas, Tex.; B.B.A., Southern Methodist University, Dallas, Tex., 1951; M.S.I.A., George Washington University, Washington, D.C., 1974; United States Air Force, 1950-1979; prisoner of war during the Vietnam War, 1966-1973; decorated combat veteran, received two Silver Stars, two Legions of Merit, the Distinguished Flying Cross, one Bronze Star with Valor, two Purple Hearts, four Air Medals, and three outstanding unit awards; member of the Texas state house of representatives, 1985-1991; elected as a Republican to the One Hundred Second Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Steve Bartlett, and reelected to the One Hundred Third and to the eleven succeeding Congresses (May 8, 1991-present)."
        ],
        [
            'govTrackId' => 400209,
            'bio'        => "JONES, Walter Beaman, Jr., (son of Walter Beaman Jones, Sr.), a Representative from North Carolina; born in Farmville, Pitt County, N.C., February 10, 1943; graduated from Hargrave Military Academy, Chatham, Va., 1961; B.A., Atlantic Christian College (now Barton College), Wilson, N.C., 1966; North Carolina National Guard, 1967-1971; member of the North Carolina state house of representatives, 1983-1992; unsuccessful candidate for nomination to the One Hundred Third Congress in 1992; elected as a Republican to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present)."
        ],
        [
            'govTrackId' => 400219,
            'bio'        => "KING, Peter T., a Representative from New York; born in New York, New York County, N.Y., April 5, 1944; B.A., St. Francis College, Brooklyn Heights, N.Y., 1965; J.D., Notre Dame University, Notre Dame, Ind., 1968; New York Army National Guard, 1968-1973; lawyer, private practice; Nassau County, N.Y. deputy attorney, 1972-1974; member of the Hempstead, N.Y., town council, 1977-1981; Nassau County, N.Y. comptroller, 1981-1993; elected as a Republican to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Committee on Homeland Security (One Hundred Ninth and One Hundred Twelfth Congresses)."
        ],
        [
            'govTrackId' => 400220,
            'bio'        => "KING, Steve, a Representative from Iowa; born in Storm Lake, Buena Vista County, Iowa, May 28, 1949; graduated from Denison Community High School, Denison, Iowa; attended Northwest Missouri State University, Maryville, Mo., 1967-1970; business owner; member of the Iowa state senate, 1996-2002; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400224,
            'bio'        => "KLINE, John, a Representative from Minnesota; born in Allentown, Lehigh County, Pa., September 6, 1947; B.A., Rice University, Houston, Tex., 1969; M.P.A., Shippensburg University of Pennsylvania, Shippensburg, Pa., 1988; United States Marine Corps, 1969-1994; leadership consultant; unsuccessful candidate for the One Hundred Sixth Congress in 1998; unsuccessful candidate for the One Hundred Seventh Congress in 2000; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present); chair, Committee on Education and the Workforce (One Hundred Twelfth through One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400244,
            'bio'        => "LoBIONDO, Frank A., a Representative from New Jersey; born in Bridgeton, Cumberland County, N.J., May 12, 1946; graduated from Georgetown Preparatory School, Rockville, Md., 1964; B.A., St. Joseph’s University, Philadelphia, Pa., 1968; freeholder, Cumberland County, N.J., 1985-1988; member of the New Jersey state general assembly, 1988-1994; elected as a Republican to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present)."
        ],
        [
            'govTrackId' => 400247,
            'bio'        => "LUCAS, Frank D., a Representative from Oklahoma; born in Cheyenne, Roger Mills County, Okla., January 6, 1960; B.S., Oklahoma State University, 1982; chairman, Roger Mills County, Okla., Republican party; staff, United States Senator Don Nickles of Oklahoma; member of the Oklahoma state house of representatives, 1988-1994; elected as a Republican to the One Hundred Third Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Glenn English and reelected to the eleven succeeding Congresses (May 10, 1994-present); chair, Committee on Agriculture (One Hundred Twelfth and One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 400273,
            'bio'        => "MICA, John L., (brother of Daniel Andrew Mica), a Representative from Florida; born in Binghamton, Broome County, N.Y., January 27, 1943; graduated from Miami-Edison High School, Miami, Fla.; A.A., Miami-Dade Community College, Miami, Fla., 1965; B.A., University of Florida, Gainesville, Fla., 1967; businessman; member of the Florida state house of representatives, 1977-1981; staff, United States Senator Paula F. Hawkins of Florida, 1981-1985; elected as a Republican to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Committee on Transportation and Infrastructure (One Hundred Twelfth Congress)."
        ],
        [
            'govTrackId' => 400276,
            'bio'        => "MILLER, Candice S., a Representative from Michigan; born in Detroit, Wayne County, Mich., May 7, 1954; graduated from Lakeshore High School, St. Clair Shores, Mich.; attended Macomb County Community College, Warren, Mich.; attended Northwood Institute; trustee, Harrison Township Board, Harrison Township, Mich., 1979-1980; Harrison Township supervisor, Harrison Township, Mich., 1980-1992; treasurer, Macomb County, Mich., 1992-1994; Michigan secretary of state, 1994-2002; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present); chair, Committee on House Administration (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400279,
            'bio'        => "MILLER, Jefferson B. (Jeff), a Representative from Florida; born in Pinellas County, Fla., June 27, 1959; B.A., University of Florida, Gainesville, Fla., 1984; real estate broker; sheriff’s deputy, Gilchrist County, Fla.; member of the Florida state house of representatives, 1998-2001; elected as a Republican to the One Hundred Seventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Joseph Scarborough and reelected to the seven succeeding Congresses (October 16, 2001-present); chair, Committee on Veterans’ Affairs (One Hundred Twelfth through One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400285,
            'bio'        => "MURPHY, Timothy, a Representative from Pennsylvania; born in Cleveland, Cuyahoga County, Ohio, on September 11, 1952; graduated from Walsh Jesuit High School, Cuyahoga Falls, Ohio; B.S., Wheeling Jesuit University, Wheeling, W.Va., 1974; M.S., Cleveland State University, Cleveland, Ohio, 1976; Ph.D., University of Pittsburgh, Pittsburgh, Pa., 1979; assistant professor of pediatrics, University of Pittsburgh School of Medicine, Pittsburgh, Pa.; associate professor (adjuct), University of Pittsburgh School of Public Health, Pittsburgh, Pa.; psychologist; member of the Pennsylvania state senate, 1996-2002; United States Navy Reserve Medical Service Corps, 2009-present; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400297,
            'bio'        => "NUNES, Devin, a Representative from California; born in Tulare County, Calif., October 1, 1973; A.A., College of the Sequoias, Visalia, Calif.; B.S., California Polytechnic, San Luis Obispo, Calif., 1995; M.S., California Polytechnic, San Luis Obispo, Calif., 1996; farmer; businessman; appointed director of the United States Department of Agriculture Rural Development, 2001; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present); chair, Permanent Select Committee on Intelligence (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400313,
            'bio'        => "PEARCE, Stevan, a Representative from New Mexico; born in Lamesa, Dawson County, Tex., August 24, 1947; attended Hobbs High School, Hobbs, N.Mex.; B.A., New Mexico State University, Las Cruces, N.Mex., 1970; M.B.A., Eastern New Mexico University, Portales, N.Mex., 1991; United States Air Force, 1970-1976; businessman; member of the New Mexico state house of representatives, 1997-2000; elected as a Republican to the One Hundred Eighth and to the two succeeding Congresses (January 3, 2003-January 3, 2009); was not a candidate for reelection in 2008, but was an unsuccessful candidate for the United States Senate; elected as a Republican to the One Hundred Twelfth and to the succeeding two Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 400320,
            'bio'        => "PITTS, Joseph R., a Representative from Pennsylvania; born in Lexington, Fayette County, Ky., October 10, 1939; B.A., Asbury College, Wilmore, Ky., 1961; M.Ed., West Chester University of Pennsylvania, West Chester, Pa., 1972; United States Air Force, 1963-1969; business owner; teacher; member of the Pennsylvania state house of representatives, 1973-1997; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400340,
            'bio'        => "ROGERS, Harold Dallas (Hal), a Representative from Kentucky; born in Barrier, Wayne County, Ky., December 31, 1937; graduated from Wayne County High School, Monticello, Ky., 1955; attended Western Kentucky University, Bowling Green, Ky., 1956-1957; A.B., University of Kentucky, Lexington, Ky., 1962; LL.B., University of Kentucky Law School, Lexington, Ky., 1964; staff sergeant, Kentucky and North Carolina Army National Guard, 1956-1963; lawyer, private practice; commonwealth attorney, Pulaski and Rockcastle Counties, Ky., 1969-1980; delegate, Republican National Conventions, 1976, 1980, 1984, 1988, 1992, 1996, 2000, 2004, and 2008; elected as a Republican to the Ninety-seventh and to the seventeen succeeding Congresses (January 3, 1981-present); chair, Committee on Appropriations (One Hundred Twelfth through One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400341,
            'bio'        => "ROGERS, Mike Dennis, a Representative from Alabama; born in Hammond, Lake County, Ind., July 16, 1958; graduated from Saks High School, Anniston, Ala., 1976; B.A., Jacksonville State University, Jacksonville, Ala., 1981; M.P.A., Jacksonville State University, Jacksonville, Ala., 1984; J.D., Birmingham School of Law, Birmingham, Ala., 1991; member of the Calhoun County, Ala., commission, 1987-1990; member of the Alabama state house of representatives, 1994-2002; and minority leader, 1998-2000; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400343,
            'bio'        => "ROHRABACHER, Dana, a Representative from California; born in Coronado, San Diego County, Calif., June 21, 1947; graduated from Palos Verdes High School, Palos Verdes Estates, Calif., 1965; attended Los Angeles Harbor College, Los Angeles, Calif., 1965-1967; B.A., California State University, Long Beach, Calif., 1969; M.A., University of Southern California, Los Angeles, Calif., 1971; journalist; assistant press secretary to the Ronald Reagan presidential campaigns of 1976 and 1980; speechwriter and special assistant to President Ronald Reagan, 1981-1988; elected as a Republican to the One Hundred First and to the thirteen succeeding Congresses (January 3, 1989-present)."
        ],
        [
            'govTrackId' => 400344,
            'bio'        => "ROS-LEHTINEN, Ileana, a Representative from Florida; born Ileana Ros in Havana, Cuba, July 15, 1952; A.A., Miami-Dade Community College, Miami, Fla., 1972; B.A., Florida International University, Miami, Fla., 1975; M.S., Florida International University, Miami, Fla., 1987; Ed.D., University of Miami, Coral Gables, Fla., 2004; founder, Eastern Academy; member of the Florida state house of representatives, 1982-1986; member of the Florida state senate, 1986-1989; elected as a Republican to the One Hundred First Congress, by special election, to fill the vacancy caused by the death of United States Representative Claude D. Pepper, and reelected to the thirteen succeeding Congresses (August 29, 1989-present); chair, Committee on Foreign Affairs (One Hundred Twelfth Congress)."
        ],
        [
            'govTrackId' => 400348,
            'bio'        => "ROYCE, Edward Randall, a Representative from California; born in Los Angeles, Los Angeles County, Calif., October 12, 1951; B.A., California State University, Fullerton, Calif., 1977; business owner; corporate tax manager; member of the California state senate, 1983-1993; elected as a Republican to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Committee on Foreign Affairs (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400351,
            'bio'        => "RYAN, Paul, a Representative from Wisconsin; born in Janesville, Rock County, Wis., January 29, 1970; graduated from Joseph A. Craig High School, Janesville, Wis., 1988; B.A., Miami University, Oxford, Ohio, 1992; construction business; staff, United States Senator Robert Kasten of Wisconsin, 1992; staff assistant, Empower America, 1993-1995; staff, United States Senator Sam Brownback of Kansas, 1995-1997; elected as a Republican to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present); chair, Committee on the Budget (One Hundred Twelfth and One Hundred Thirteenth Congresses); chair, Committee on Ways and Means (One Hundred Fourteenth Congress); unsuccessful Republican candidate for Vice President of the United States in 2012."
        ],
        [
            'govTrackId' => 400365,
            'bio'        => "SENSENBRENNER, Frank James, Jr., a Representative from Wisconsin; born in Chicago, Cook County, Ill., June 14, 1943; graduated from Milwaukee Country Day School, 1961; A.B., Stanford University, Stanford, Calif., 1965; J.D., University of Wisconsin Law School, Madison, Wis., 1968; staff, United States Representative J. Arthur Younger of California, 1965; lawyer, private practice; member of the Wisconsin state assembly, 1969-1975; member of the Wisconsin state senate, 1975-1979, assistant minority leader, 1977-1979; delegate, Wisconsin state Republican conventions, 1965-2015; elected as a Republican to the Ninety-sixth and to the nineteen succeeding Congresses (January 3, 1979-present); one of the managers appointed by the House of Representatives in 1989 to conduct the impeachment proceedings against Walter L. Nixon, judge of the United States District Court for the District Court of Mississippi; one of the managers appointed by the House of Representatives in 1998 to conduct the impeachment proceedings of President William Jefferson Clinton; one of the managers appointed by the House of Representatives in 2009 to conduct the impeachment proceedings of Samuel B. Kent, judge of the United States District Court for the Southern District of Texas; one of the managers appointed by the House of Representatives in 2010 to conduct the impeachment proceedings of G. Thomas Porteous, Jr., judge of the United States District Court for the Eastern District of Louisiana; chair, Committee on Science (One Hundred Fifth and One Hundred Sixth Congresses); chair, Committee on the Judiciary (One Hundred Seventh through the One Hundred Ninth Congresses)."
        ],
        [
            'govTrackId' => 400367,
            'bio'        => "SESSIONS, Pete, a Representative from Texas; born in Waco, McLennan County, Tex., March 22, 1955; B.S., Southwestern University, Georgetown, Tex., 1978; business executive; professional advocate; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present); chair, Committee on Rules (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400373,
            'bio'        => "SHIMKUS, John M., a Representative from Illinois; born in Collinsville, Madison County, Ill., February 21, 1958; graduated from Collinsville High School, Collinsville, Ill.; B.S., West Point Military Academy, West Point, N.Y., 1980; teaching certificate, Christ College, Irvine, Calif., 1990; M.B.A., Southern Illinois University, Edwardsville, Ill., 1997; United States Army, 1980-1986; United States Army Reserve, 1986-2008; Collinsville Township, Ill., trustee, 1989-1993; Madison County, Ill., treasurer, 1990-1996; elected as a Republican to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400376,
            'bio'        => "SIMPSON, Michael K., a Representative from Idaho; born in Burley, Cassia County, Idaho, September 8, 1950; graduated from Blackfoot High School, Blackfoot, Idaho, 1968; graduated from Utah State University, Logan, Utah, 1972; D.M.D., Washington University School of Dental Medicine, St. Louis, Mo., 1978; dentist; member of the Idaho state house of representatives, 1984-1998, speaker, 1993-1998; elected as a Republican to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present)."
        ],
        [
            'govTrackId' => 400380,
            'bio'        => "SMITH, Christopher Henry, a Representative from New Jersey; born in Rahway, Union County, N.J., March 4, 1953; graduated from St. Mary’s High School, Perth Amboy, N.J., 1971; B.S., Trenton State College, Ewing, N.J., 1975; attended Worcester College, Worcester, England, 1974; businessman, family sporting goods company; legislative agent for New Jersey state legislature, 1979; unsuccessful candidate for election to the Ninety-sixth Congress in 1978; elected as a Republican to the Ninety-seventh and to the seventeen succeeding Congresses (January 3, 1981-present); chair, Committee on Veterans Affairs (One Hundred Seventh through One Hundred Eighth Congresses)."
        ],
        [
            'govTrackId' => 400381,
            'bio'        => "SMITH, Lamar Seeligson, a Representative from Texas; born in San Antonio, Bexar County, Tex., November 19, 1947; graduated from Texas Military Institute, San Antonio, Tex., 1965; B.A., Yale University, New Haven, Conn., 1969; J.D., Southern Methodist University School of Law, Dallas, Tex., 1975; journalist; lawyer, private practice; member of the Texas state house of representatives, 1981-1982; Bexar County, Tex., commissioner, 1982-1985; elected as a Republican to the One Hundredth and to the fourteen succeeding Congresses (January 3, 1987-present); chair, Committee on Standards of Official Conduct (One Hundred Sixth Congress); chair, Committee on the Judiciary (One Hundred Twelfth Congress); chair, Committee on Science, Space, and Technology (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400404,
            'bio'        => "THORNBERRY, William McClellan (Mac), a Representative from Texas; born in Clarendon, Donley County, Tex., July 15, 1958; graduated from Clarendon High School, Clarendon, Tex., 1976; B.A., Texas Tech University, Lubbock, Tex., 1980; J.D., University of Texas School of Law, Austin, Tex., 1983; staff, United States Representative Thomas G. Loeffler of Texas, 1983-1985; staff, United States Representative Larry Combest of Texas, 1985-1988; deputy assistant Secretary of State for Legislative Affairs, United States Department of State, 1988-1989; rancher; lawyer, private practice; elected as a Republican to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present); chair, Committee on Armed Services (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400406,
            'bio'        => "TIBERI, Patrick (Pat), a Representative from Ohio; born in Columbus, Franklin County, Ohio, October 21, 1962; graduated from Northland High School, Columbus, Ohio, 1981; B.A., Ohio State University, Columbus, Ohio, 1985; member of the Ohio state house of representatives, 1992-2001; elected as a Republican to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present)."
        ],
        [
            'govTrackId' => 400411,
            'bio'        => "TURNER, Michael R., a Representative from Ohio; born in Dayton, Montgomery County, Ohio, January 11, 1960; graduated from Belmont High School, Dayton, Ohio, 1978; B.A., Ohio Northern University, Ada, Ohio, 1982; J.D., Case Western Reserve University, Cleveland, Ohio, 1985; M.B.A., University of Dayton, Dayton, Ohio, 1992; lawyer, private practice; mayor of Dayton, Ohio, 1994-2002; elected as a Republican to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400414,
            'bio'        => "UPTON, Frederick Stephen, a Representative from Michigan; born in St. Joseph, Berrien County, Mich., April 23, 1953; graduated from Shattuck School, Fairbault, Minn.; A.B., University of Michigan, Ann Arbor, Mich., 1975; staff, United States Representative David Stockman of Michigan, 1976-1980; staff, United States Office of Management and Budget, 1981-1985; elected as a Republican to the One Hundredth and to the fourteen succeeding Congresses (January 3, 1987-present); chair, Committee on Energy and Commerce (One Hundred Twelfth through One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400419,
            'bio'        => "WALDEN, Greg, a Representative from Oregon; born in The Dalles, Wasco County, Ore., January 10, 1957; B.S., University of Oregon, Eugene, Ore., 1981; member of the Oregon state house of representatives, 1989-1995; member of the Oregon state senate, 1995-1997; elected as a Republican to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present)."
        ],
        [
            'govTrackId' => 400431,
            'bio'        => "WHITFIELD, Wayne Edward (Ed), a Representative from Kentucky; born in Hopkinsville, Christian County, Ky., May 25, 1943; graduated from Madisonville High School, Madisonville, Ky., 1961; B.S., University of Kentucky, Lexington, Ky., 1965; attended Wesley Theological Seminary and American University, Washington, D.C.; J.D., University of Kentucky School of Law, Lexington, Ky., 1969; United States Army Reserve, 1967-1973; lawyer, private practice; business executive; business owner; attorney adviser to Chairman Edward J. Philbin of the Interstate Commerce Commission, 1991-1993; member of the Kentucky state house of representatives, 1973-1975; elected as a Republican to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present)."
        ],
        [
            'govTrackId' => 400433,
            'bio'        => "WILSON, Addison Graves (Joe), a Representative from South Carolina; born in Charleston, S.C., July 31, 1947; graduated from the High School of Charleston, Charleston, S.C.; B.A., Washington and Lee University, Lexington, Va., 1969; J.D., University of South Carolina, Columbia, S.C., 1972; United States Army Reserve, 1972-1975; South Carolina Army National Guard; lawyer, private practice; deputy general counsel, United States Department of Energy, 1981-1982; staff, United States Senator Strom Thurmond of South Carolina; staff, United States Representative Floyd Spence of South Carolina; member of the South Carolina state senate, 1984-2001; elected as a Republican to the One Hundred Seventh Congress, by special election, to fill the vacancy caused by the death of United States Representative Floyd Spence, and reelected to the seven succeeding Congresses (December 18, 2001-present)."
        ],
        [
            'govTrackId' => 400440,
            'bio'        => "YOUNG, Donald Edwin, a Representative from Alaska; born in Meridian, Sutter County, Calif., June 9, 1933; A.A., Yuba Junior College, Marysville, Calif., 1952; B.A., California State University, Chico, Calif., 1958; United States Army, 1955-1957; teacher; Mayor of Fort Yukon, Alaska, 1960-1968; riverboat captain, 1968-1972; member of the Fort Yukon, Alaska, city council, 1960-1968; member of the Alaska state house of representatives, 1966-1970; member of the Alaska state senate, 1970-1973; delegate, Alaska state Republican conventions, 1964, 1966, 1968, and 1972; elected as a Republican to the Ninety-third Congress, by special election, to fill the vacancy caused by the death of United States Representative Nick Begich, and reelected to the twenty-one succeeding Congresses (March 6, 1973-present); chair, Committee on Resources (One Hundred Fourth through One Hundred Sixth Congresses); chair, Committee on Transportation and Infrastructure (One Hundred Seventh through One Hundred Ninth Congresses)."
        ],
        [
            'govTrackId' => 400441,
            'bio'        => "NEUGEBAUER, Randy, a Representative from Texas; born in St. Louis, St. Louis County, Mo., December 24, 1949; graduated from Coronado High School, Lubbock, Tex., 1968; graduated from Texas Tech University, Lubbock, Tex., 1972; businessman; member of the Lubbock, Tex., city council, 1992-1998; mayor pro tempore, Lubbock, Tex., 1994-1996; elected as a Republican to the One Hundred Eighth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Larry Combest, and reelected to the six succeeding Congresses (June 3, 2003-present)."
        ],
        [
            'govTrackId' => 400606,
            'bio'        => "SALMON, Matthew James, a Representative from Arizona; born in Salt Lake City, Davis County, Utah, January 21, 1958; graduated Mesa High School, Mesa, Ariz., 1976; B.A., Arizona State University, Tempe, Ariz., 1981; M.P.A., Brigham Young University, Provo, Utah, 1986; telecommunications executive; community affairs manager; member of the Arizona state senate, 1991-1995; assistant majority leader, Arizona state senate, 1993-1995; elected as a Republican to the One Hundred Fourth and to the two succeeding Congresses (January 3, 1995-January 3, 2001); was not a candidate for reelection to the One Hundred Seventh Congress in 2000; unsuccessful candidate for Governor of Arizona in 2002; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 400607,
            'bio'        => "SANFORD, Mark, a Representative from South Carolina; born in Fort Lauderdale, Broward County, Fla., May 28, 1960; attended high school in Beaufort, S.C.; B.A., Furman University, Greenville, S.C., 1983; M.B.A., University of Virginia, Charlottesville, Va., 1988; owner, real estate investment firm; farmer; elected as a Republican to the One Hundred Fourth and to the two succeeding Congresses (January 3, 1995-January 3, 2001); was not a candidate for reelection to the One Hundred Seventh Congress in 2000; Governor of South Carolina, 2003-2011; elected as a Republican to the One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Tim Scott, and reelected to the succeeding Congress (May 7, 2013-present)."
        ],
        [
            'govTrackId' => 400626,
            'bio'        => "PRICE, Tom, a Representative from Georgia; born in Lansing, Ingham County, Mich., October 8, 1954; graduated from Dearborn High School, Dearborn, Mich., 1972; A.B., University of Michigan, Ann Arbor, Mich., 1976; M.D., University of Michigan, Ann Arbor, Mich., 1979; physician; member of the Georgia state senate, 1997-2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present); chair, Committee on Budget (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400627,
            'bio'        => "WESTMORELAND, Lynn A., a Representative from Georgia; born in Atlanta, Fulton County, Ga., April 2, 1950; graduated from Therrell High School, Atlanta, Ga., 1968; attended Georgia State University, Atlanta, Ga., 1969-1971; real estate developer; member of the Georgia state house of representatives, 1993-2004, and minority leader, 2000-2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400636,
            'bio'        => "BOUSTANY, Charles W., a Representative from Louisiana; born in New Orleans, Orleans Parish, La., February 21, 1956; graduated Cathedral Carmel High School, Lafayette, La.; B.S., University of Southwestern Louisiana, Lafayette, La., 1978; M.D., Louisiana State University School of Medicine, New Orleans, La., 1982; surgeon; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400640,
            'bio'        => "FORTENBERRY, Jeff, a Representative from Nebraska; born in Baton Rouge, East Baton Rouge Parish, La., December 27, 1960; B.A., Louisiana State University, Baton Rouge, La., 1982; M.P.P., Georgetown University, Washington, D.C., 1986; M.Th., Franciscan University, Steubenville, Ohio, 1996; member of the Lincoln, Nebr., city council, 1997-2001; publishing executive; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400643,
            'bio'        => "FOXX, Virginia Ann, a Representative from North Carolina; born in New York, New York County, N.Y., June 29, 1943; graduated from Crossnore High School, Crossnore, N.C., 1961; A.B., University of North Carolina, Chapel Hill, N.C., 1968; M.A.C.T., University of North Carolina, Chapel Hill, N.C., 1972; Ed.D., University of North Carolina, Greensboro, N.C., 1985; instructor, Caldwell Community College, Hudson, N.C.; instructor, Appalachian State University, Boone, N.C.; assistant dean, Appalachian State University, Boone, N.C.; president, Mayland Community College, Spruce Pine, N.C., 1987-1994; landscape nursery owner; deputy secretary for management, North Carolina Department of Administration; member of the Watauga County, N.C., board of education, 1976-1988; member, North Carolina state senate, 1994-2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400644,
            'bio'        => "McHENRY, Patrick T., a Representative from North Carolina; born in Charlotte, Mecklenburg County, N.C., October 22, 1975; graduated Ashbrook High School, Gastonia, N.C., 1994; attended North Carolina State University, Raleigh, N.C.; B.A., Belmont Abbey College, Belmont, N.C., 1999; realtor; appointed special assistant to the United States Secretary of Labor by President George W. Bush in 2001; member, North Carolina house of representatives, 2002- 2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400646,
            'bio'        => "FITZPATRICK, Michael G., a Representative from Pennsylvania; born in Philadelphia, Philadelphia County, Pa., June 28, 1963; B.A., St. Thomas University, Florida, 1985; J.D., Dickinson School of Law, Carlisle, Pa., 1988; lawyer, private practice; Bucks County, Pa. commissioner, 1995-2004; elected as a Republican to the One Hundred Ninth Congress (January 3, 2005-January 3, 2007); unsuccessful candidate for re-election to the One Hundred Tenth Congress in 2006; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 400648,
            'bio'        => "DENT, Charles W., a Representative from Pennsylvania; born in Allentown, Lehigh County, Pa., May 24, 1960; graduated from William Allen High School, Allentown, Pa., 1978; B.A., Pennsylvania State University, University Park, Pa., 1982; M.P.A., Lehigh University, Bethlehem, Pa., 1993; staff, United States Representative Donald Ritter of Pennsylvania; college administrator; sales representative; hotel clerk; member of the Pennsylvania state house of representatives, 1991-1998; member of the Pennsylvania state senate, 1999-2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present); chair, Committee on Ethics (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400651,
            'bio'        => "GOHMERT, Louie, a Representative from Texas; born in Pittsburg, Camp County, Tex., August 18, 1953; graduated from Mount Pleasant High School, Mount Pleasant, Tex., 1971; B.A., Texas A&M University, College Station, Tex., 1975; J.D., Baylor University, Waco, Tex., 1977; United States Army, 1978-1982; lawyer, private practice; district judge, Smith County, Tex., 1992-2002; chief justice, twelfth circuit court, 2002-2003; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400652,
            'bio'        => "POE, Ted, a Representative from Texas; born in Temple, Bell County, Tex., September 10, 1948; B.A., Abilene Christian University, Abilene, Tex., 1970; J.D., University of Houston, Houston, Tex., 1973; United States Air Force Reserves, 1970-1976; teacher; lawyer, private practice; district attorney, Harris County, Houston, Tex., 1973-1981; district judge, Harris County, Houston, Tex., 1981-2003; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400654,
            'bio'        => "McCAUL, Michael T., a Representative from Texas; born in Dallas, Dallas County, Tex., January 14, 1962; B.S., Trinity University, San Antonio, Tex., 1984; J.D., St. Mary’s University, San Antonio, Tex., 1987; lawyer, private practice; deputy attorney general, Office of the Attorney General, State of Texas; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present); chair, Committee on Homeland Security (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400655,
            'bio'        => "CONAWAY, K. Michael, a Representative from Texas; born in Borger, Hutchinson County, Tex, June 11, 1948; graduated from Odessa Permian High School, Odessa, Tex., 1966; B.B.A., Texas Agricultural and Mechanical University-Commerce, Commerce, Tex., 1970; United States Army, 1970-1972; certified public accountant; bank executive; member of the Midland, Tex., school board, 1985-1988; unsuccessful candidate for special election for the United States House of Representatives in 2003; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present); chair, Committee on Ethics (One Hundred Thirteenth Congress); chair, Committee on Agriculture (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 400656,
            'bio'        => "MARCHANT, Kenny, a Representative from Texas; born in Bonham, Fannin County, Tex., February 23, 1951; B.A., South Nazarene University, Bethany, Okla., 1974; attended Nazarene Theological Seminary, Kansas City, Mo., 1975-1976; real estate developer; member of the Carrollton, Tex., city council, 1980-1984; mayor of Carrollton, Tex., 1984-1987; member of the Texas state house of representatives, 1987-2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 400659,
            'bio'        => "McMORRIS RODGERS, Cathy, a Representative from Washington; born in Salem, Marion County, Oreg., May 22, 1969; B.A., Pensacola Christian College, Pensacola, Fla., 1990; M.B.A., University of Washington, Seattle, Wash., 2002; family orchard business; member of the Washington state house of representatives, 1994-2004, minority leader, 2002-2003; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present); chair, House Republican Conference (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400660,
            'bio'        => "REICHERT, David G., a Representative from Washington; born in Detroit Lakes, Becker County, Minn., August 29, 1950; graduated, Kent Meridian High School, Kent, Wash., 1968; A.A., Concordia Lutheran College, Portland, Oreg., 1970; United States Air Force reserve, 1971-1976; United States Air Force, 1976; police officer, King County, Wash., 1972-1997; sheriff, King County, Wash., 1997- 2004; elected as a Republican to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present)."
        ],
        [
            'govTrackId' => 409888,
            'bio'        => "SHUSTER, William (Bill), (son of E. G. \"Bud\" Shuster), a Representative from Pennsylvania; born in McKeesport, Allegheny County, Pa., January 10, 1961; graduated from Everett High School, Everett. Pa.; B.A., Dickinson College, Carlisle, Pa., 1983; M.B.A., American University, Washington, D.C.; business owner; elected as a Republican to the One Hundred Seventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative E. G. “Bud” Shuster of Pennsylvania and reelected to the seven succeeding Congresses (May 15, 2001-present); chair, Committee on Transportation and Infrastructure (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 412190,
            'bio'        => "MCCARTHY, Kevin, a Representative from California; born in Bakersfield, Kern County, Calif., January 26, 1965; attended Bakersfield College, Bakersfield. Calif., 1984-1985; B.S., California State University, Bakersfield, Calif., 1989; M.B.A., California State University, Bakersfield, Calif., 1994; staff, United States Representative William Thomas of California, 1987-2002; member of the California state assembly, 2002-2007; minority leader, California state assembly, 2004-2006; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present); majority whip (One Hundred Twelfth and One Hundred Thirteenth Congresses); majority leader (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 412191,
            'bio'        => "LAMBORN, Doug, a Representative from Colorado; born in Leavenworth, Leavenworth County, Kans., May 24, 1954; graduated from Lansing High School, Lansing, Kans.; B.S., University of Kansas, Lawrence, Kans., 1978; J.D., University of Kansas, Lawrence, Kans., 1985; lawyer, private practice; member of the Colorado state house of representatives, 1995-1998; member of the Colorado state senate, 1998-2006, president pro tempore, 1999-2000; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412196,
            'bio'        => "BUCHANAN, Vernon G., a Representative from Florida; born on May 8, 1951; B.B.A., Cleary University, Ann Arbor, Mich., 1975; M.B.A., University of Detroit, Detroit, Mich., 1986; Michigan Air National Guard, 1970-1976; businessman; campaign staff; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412202,
            'bio'        => "ROSKAM, Peter, a Representative from Illinois; born in Hinsdale, DuPage County, Ill., September 13, 1961; B.A. University of Illinois, Urbana-Champaign, Ill., 1983; J.D., Illinois Institute of Technology, Chicago, Ill., 1989; lawyer, private practice; staff, United States Representative Tom DeLay of Texas, 1985-1986; staff, United States Representative Henry Hyde of Illinois, 1986-1987; teacher; businessman; member of the Illinois state house of representatives, 1993-1999; member of the Illinois state senate, 2000-2006; unsuccessful candidate for nomination to the United States House of Representatives in 1998; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412213,
            'bio'        => "WALBERG, Tim, a Representative from Michigan; born in Chicago, Cook County, Ill., April 12, 1951; graduated from Thornton Fractional Township North High School, Calumet, Ill., 1969; attended Western Illinois University, Macomb, Ill., 1969-1970; attended Moody Bible College Institute, Chicago, Ill., 1970-1973; B.S. Fort Wayne Bible College, 1975; M.A., Wheaton College, Wheaton, Ill., 1978; minister; member of the Michigan state house of representatives, 1983-1998; unsuccessful candidate for nomination to the United States House of Representatives in 2004; elected as a Republican to the One Hundred Tenth Congress (January 3, 2007-January 3, 2009); unsuccessful candidate for reelection to the One Hundred Eleventh Congress in 2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412217,
            'bio'        => "SMITH, Adrian, a Representative from Nebraska; born in Scottsbluff, Scottsbluff County, Nebr., December 19, 1970; graduated from Gering High School, Gering, Nebr., 1989; attended Liberty University, Lynchburg. Va., 1989-1990; B.S., University of Nebraska, Lincoln, Nebr., 1993; business owner; teacher; member of the Gering, Nebr., city council, 1994-1998; member of the Nebraska state legislature, 1999-2007; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412226,
            'bio'        => "JORDAN, Jim, a Representative from Ohio; born in Troy, Miami County, Ohio, February 17, 1964; graduated from Graham High School, St. Paris, Ohio, 1982; B.S., University of Wisconsin, Madison, Wis., 1986; M.A., Ohio State University, Columbus, Ohio, 1991; J.D., Capital University, Columbus, Ohio, 2001; lawyer, private practice; member of the Ohio state house of representatives, 1995-2000; member of the Ohio state senate, 2001-2007; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412250,
            'bio'        => "BILIRAKIS, Gus, (son of Michael Bilirakis), a Representative from Florida; born in Gainesville, Alachua County, Fla., February 8, 1963; attended St. Petersburg Junior College, St. Petersburg, Fla., 1981-1983; B.A., University of Florida, Gainesville, Fla., 1986; J.D., Stetson University, St. Petersburg, Fla., 1989; lawyer, private practice; professor; member of the Florida state house of representatives, 1998-2006; elected as a Republican to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412255,
            'bio'        => "WITTMAN, Robert J., a Representative from Virginia; born in Washington, D.C., February 3, 1959; B.S., Virginia Polytechnic Institute, Blacksburg, Va., 1981; M.P.H., University of North Carolina, Chapel Hill, N.C., 1990; Ph.D., Virginia Commonwealth University, Richmond, Va., 2002; shellfish sanitation; member of the Montross, Va., town council, 1986-1996; mayor of Montross, Va., 1992-1996; member of the Westmoreland County, Va., board of supervisors, 1996-2005; chairman of the Westmoreland County Va., board of supervisors, 2004-2005; member of the Virginia house of delegates, 2006-2007; elected as a Republican to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the death of United States Representative Jo Ann Davis, and to the four succeeding Congresses (December 11, 2007-present)."
        ],
        [
            'govTrackId' => 412256,
            'bio'        => "LATTA, Robert E., (son of Delbert L. Latta), a Representative from Ohio; born in Bluffton, Allen County, Ohio, April 18, 1956; B.A., Bowling Green State University, Bowling Green, Ohio, 1978; J.D., University of Toledo, Toledo, Ohio, 1981; lawyer, private practice; Wood County, Ohio, commissioner, 1991-1996; member of the Ohio state senate, 1997-2000; member of the Ohio state house of representatives, 2001-2007; elected as a Republican to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the death of United States Representative Paul Gillmor, and reelected to the four succeeding Congresses (December 11, 2007-present)."
        ],
        [
            'govTrackId' => 412261,
            'bio'        => "SCALISE, Steve, a Representative from Louisiana; born in New Orleans, Orleans Parish, La., October 6, 1965; graduated from Rummel High School; B.S., Louisiana State Univeristy, Baton Rouge, La.; software engineer; technology company marketing executive; member of the Louisiana state house of representatives, 1995-2007; member of the Louisiana state senate, 2008; elected as a Republican to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Bobby Jindal, and reelected to the four succeeding Congresses (May 3, 2008-present); majority whip (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 412269,
            'bio'        => "CASSIDY, Bill, a Senator and a Representative from Louisiana; born in Highland Park, Lake County, Ill., September 28, 1957; B.S., Louisiana State University, Baton Rouge, La., 1979; M.D., Louisiana State University Medical School, New Orleans, La., 1983; physician; member of the Louisiana state senate, 2006-2008; elected as a Republican to the One Hundred Eleventh and to the two succeeding Congresses (January 3, 2009-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412270,
            'bio'        => "CHAFFETZ, Jason, a Representative from Utah; born in Los Gatos, Santa Clara County, Calif., March 26, 1967; B.A., Brigham Young University, Provo, Utah, 1989; business executive; staff, Utah Governor John Huntsman, 2004; member of the Utah Valley board of trustees, 2007-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present); chair, Committee on Oversight and Government Reform (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 412271,
            'bio'        => "COFFMAN, Mike, a Representative from Colorado; born in Fort Leonard Wood, Pulaski County, Mo., March 19, 1955; attended Aurora Central High School, Aurora, Colo.; received graduation equivalency degree through the United States Army; B.A., University of Colorado, Boulder, Colo., 1979; United States Army, 1972-1974; United States Army Reserve, 1975-1978; United States Marine Corps, 1979-1982; United States Marine Corps Reserve, 1983-1994, 2005-2006; small business owner; member of the Colorado state house of representatives, 1989-1994; member of the Colorado state senate, 1994-1998; Colorado state treasurer, 1999-2007; Colorado secretary of state, 2007-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412275,
            'bio'        => "FLEMING, John, (relative of Henry Clay and John Thomas Clay), a Representative from Louisiana; born in Meridian, Lauderdale County, Miss., July 5, 1951; B.S., University of Mississippi, Oxford, Miss., 1973; M.D., University of Mississippi, Jackson, Miss., 1976; United States Navy, 1976-1982; physician; entrepreneur; Webster Parish, La., coroner, 1996-2000; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009–present)."
        ],
        [
            'govTrackId' => 412278,
            'bio'        => "GUTHRIE, Brett, a Representative from Kentucky; born in Florence, Lauderdale County, Ala., February 18, 1964; graduated from Bradshaw High School, Florence, Ala., 1982; B.S., United States Military Academy, West Point, N.Y., 1987; M.P.P.M., Yale University, New Haven, Conn., 1997; United States Army, 1987-1990; United States Army Reserve, 1990-2002; business executive; member of the Kentucky state senate, 1999-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412280,
            'bio'        => "HARPER, Gregg, a Representative from Mississippi; born in Jackson, Hinds County, Miss., June 1, 1956; graduated from Pearl High School, Pearl, Miss., 1974; B.S., Mississippi College, Clinton, Miss., 1978; J.D., University of Mississippi, Oxford, Miss., 1981; lawyer, private practice; prosecutor, Brandon, Miss.; prosecutor, Richland, Miss.; chairman, Rankin County, Miss. Republican Party, 2000-2007; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present); chair, Joint Committee on the Library of Congress (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 412283,
            'bio'        => "HUNTER, Duncan Duane, (son of Duncan Lee Hunter), a Representative from California; born in San Diego, San Diego County, Calif., December 7, 1976; graduated from Granite Hills High School, El Cajon, Calif.; B.S., San Diego State University, San Diego, Calif., 2001; United States Marine Corps, 2002-2005; United States Marine Corps Reserve, 2005-present; real estate developer; businessman; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412284,
            'bio'        => "JENKINS, Lynn, a Representative from Kansas; born in Holton, Jackson County, Kans., June 10, 1963; A.A., Kansas State University, Manhattan, Kans., 1985; B.S., Weber State University, Ogden, Utah, 1985; accountant; member of the Kansas state house of representatives, 1999-2001; member of the Kansas state senate, 2001-2003; Kansas state treasurer, 2003-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412290,
            'bio'        => "LANCE, Leonard, a Representative from New Jersey; born in Easton, Northampton County, Pa., June 25, 1952; graduated from North Hunterdon Regional High School, Annandale, N.J., 1970; B.A., Lehigh University, Bethlehem, Pa., 1974; J.D., Vanderbilt University, Nashville, Tenn., 1977; M.P.A., Princeton University, Princeton, N.J., 1982; judicial clerk; lawyer, private practice; member of the New Jersey state general assembly, 1991-2002; member of the New Jersey state senate, 2002-2009; minority leader of the New Jersey state senate, 2004-2008; unsuccessful candidate for election to the United States House of Representatives in 1996; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412292,
            'bio'        => "LUETKEMEYER, Blaine, a Representative from Missouri; born in Jefferson City, Cole County, Mo., May 7, 1952; B.A., Lincoln University, Jefferson City, Mo., 1974; business owner; banker; rancher; member of the St. Elizabeth, Mo., board of trustees, 1978-1987; member of the Missouri state house of representatives, 1999-2005; director, tourism commission of Missouri, 2006-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412294,
            'bio'        => "LUMMIS, Cynthia M., a Representative from Wyoming; born in Cheyenne, Laramie County, Wyo., September 10, 1954; B.S., University of Wyoming, Laramie, Wyo., 1976; B.A., University of Wyoming, 1978; J.D., University of Wyoming College of Law, Laramie, Wyo., 1985; rancher; lawyer, private practice; staff, Wyoming Governor Jim Geringer, 1994-1996; member of Wyoming state house of representatives, 1979-1983, 1985-1993; member of Wyoming state senate, 1993-1995; Wyoming state treasurer, 1999-2007; Wyoming state lands and investment acting director, 1997-1998; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412295,
            'bio'        => "McCLINTOCK, Tom, a Representative from California; born in Bronxville, Westchester County, N.Y., July 10, 1956; B.A., University of California, Los Angeles, Calif., 1988; journalist; public policy analyst; member of the California state assembly, 1982-1992, 1996-2000; member of the California state senate, 2000-2008; unsuccessful candidate for the United States House of Representatives in 1992; unsuccessful candidate for Governor of California in 2003; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412302,
            'bio'        => "OLSON, Pete, a Representative from Texas; born in Fort Lewis, Pierce County, Wash., December 9, 1962; graduated from Clear Lake High School, Houston, Tex.; B.A., Rice University, Houston, Tex., 1985; J.D., University of Texas School of Law, Austin, Tex., 1988; United States Navy, 1988-1997; United States Naval Reserve, 1998-present; staff, United States Senator Phil Gramm of Texas, 1998-2002; staff, United States Senator John Cornyn of Texas, 2002-2007; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412303,
            'bio'        => "PAULSEN, Erik, a Representative from Minnesota; born in Bakersfield, Kern County, Calif., May 14, 1965; graduated from Chaska High School, Chaska, Minn., 1983; B.A., St. Olaf College, Northfield, Minn., 1987; businessman; staff, United States Senator Rudy Boschwitz of Minnesota; member of the Minnesota state house of representatives, 1995-2008, majority leader, 2003-2007; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412671,
            'bio'        => "SASSE, Benjamin Eric, a Senator from Nebraska; born in Plainview, Pierce County, Nebr., February 22, 1972; B.A., Harvard University, 1994; M.A., St. John’s College, Annapolis, Md., 1998; Ph.D., Yale University, 2004; management consultant; university professor; chief of staff to U.S. Representative Jeff Fortenberry; counselor to the secretary, U.S. Department of Health and Human Services; assistant secretary for planning and evaluation, U.S. Department of Health and Human Services; president of Midland University, Fremont, Nebr.; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412309,
            'bio'        => "POSEY, Bill, a Representative from Florida; born in Washington, D.C., December 18, 1947; graduated from Cocoa High School, Cocoa, Fla., 1966; A.A., Brevard Junior College (now Brevard Community College), Cocoa, Fla., 1969; realtor; member of the Rockledge, Fla., city council, 1976-1986; member of the Florida state house of representatives, 1992-2000; member of the Florida state senate, 2000-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412310,
            'bio'        => "ROE, David P. (Phil), a Representative from Tennessee, born in Clarksville, Montgomery County, Tenn., July 21, 1945; B.S., Austin Peay State University, Clarksville, Tenn., 1967; M.D., University of Tennessee, Knoxville, Tenn., 1970; United States Army, 1973-1974; physician; unsuccessful candidate for nomination to the United States House of Representatives in 2006; member of the Johnson City, Tenn., board of commissioners, 2003-2008; vice mayor of Johnson City, Tenn., 2003-2007; mayor of Johnson City, Tenn., 2007-2009; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412311,
            'bio'        => "ROONEY, Thomas J., a Representative from Florida; born in Philadelphia, Philadelphia County, Pa., November 21, 1970; attended Syracuse University, Syracuse, N.Y., 1989; B.A., Washington and Jefferson College, Washington, Pa., 1993; M.A., University of Florida, Gainesville, Fla., 1996; J.D., University of Miami, Coral Gables, Fla., 1999; United States Army, 2000-2004; lawyer, private practice; assistant attorney general, Office of the Attorney General, State of Florida; professor, United States Military Academy, West Point, N.Y.; staff, United States Senator Connie Mack III of Florida; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412317,
            'bio'        => "THOMPSON, Glenn, a Representative from Pennsylvania; born in Bellefonte, Centre County, Pa., July 27, 1959; B.S., Pennsylvania State University, University Park, Pa., 1981; M.Ed., Temple University, Philadelphia, Pa., 1988; rehabilitation therapist manager; member of the Bald Eagle, Pa., school board, 1990-1995; unsuccessful nominee for Pennsylvania state house of representatives in 1998 and 2000; chairman, Centre County Pa., Republican Party, 2002-2008; elected as a Republican to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412322,
            'bio'        => "RISCH, James, a Senator from Idaho; born in Milwaukee, Wis., May 3, 1943; B.A., attended the University of Wisconsin, Milwaukee, 1961-1963; B.S. in Forestry, University of Idaho, 1965; J.D., University of Idaho College of Law, 1968; Ada County, Idaho, prosecuting attorney, 1970-1974; Idaho State senator, 1974-1989 and 1995-2003, serving as majority leader (1976-1982), and as president pro tempore (1982-1989); lieutenant governor of Idaho, 2003-2006 and 2007-2009; governor of Idaho, 2006; elected as a Republican to the United States Senate in 2008; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412388,
            'bio'        => "GRAVES, Tom, a Representative from Georgia; born in St. Petersburg, Pinellas County, Fla., February 3, 1970; graduated from Cass High School, Cartersville, Ga., 1988; B.B.A., University of Georgia, Athens, Ga., 1993; business owner; member of the Georgia state house of representatives, 2003-2010; elected as a Republican to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative John Nathan Deal and to the three succeeding Congresses (June 8, 2010-present)."
        ],
        [
            'govTrackId' => 412392,
            'bio'        => "STUTZMAN, Marlin, a Representative from Indiana; born in Sturgis, Saint Joseph County, Mich., August 31, 1976; graduated from Lake Area Christian High School, Sturgis, Mich., 1994; attended Trine State University, Angola, Ind.; attended Glen Oaks Community College, Centreville, Mich.; farmer; business owner; member of the Indiana state house of representatives, 2002-2008; member of the Indiana state senate, 2009-2010; unsuccessful candidate for nomination to the United States Senate in 2010; elected as a Republican to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Mark Souder, and simultaneously elected to the One Hundred Twelfth Congress; reelected to the two succeeding Congresses (November 2, 2010-present)."
        ],
        [
            'govTrackId' => 412393,
            'bio'        => "REED, Thomas W. II, a Representative from New York; born in Joliet, Will County, Ill., November 18, 1971; graduated from Horseheads High School, Horseheads, N.Y., 1989; B.A., Alfred University, Alfred, N.Y., 1993; J.D., Ohio Northern University, Ada, Ohio, 1996; lawyer, private practice; business owner; Mayor of Corning, N.Y., 2007-2010; elected as a Republican to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Eric J.J. Massa, and to the three succeeding Congresses (November 2, 2010-present)."
        ],
        [
            'govTrackId' => 412394,
            'bio'        => "ROBY, Martha, a Representative from Alabama; born in Montgomery, Montgomery County, Ala., July 27, 1976; B.M., New York University, New York, N. Y., 1998; J.D., Samford University, Birmingham, Ala., 2001; lawyer, private practice; member of the Montgomery, Ala., city council, 2003-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412395,
            'bio'        => "BROOKS, Mo, a Representative from Alabama; born in Charleston, Charleston County, S.C., April 29, 1954; graduated from Grissom High School, Huntsville, Ala., 1972; B.A., Duke University, Durham, N.C., 1975; J.D., University of Alabama School of Law, Tuscaloosa, Ala., 1978; lawyer, private practice; Tuscaloosa County, Ala. prosecutor, 1978-1980; clerk, Circuit Court Judge John Snodgrass, 1980-1982; member of the Alabama house of representatives, 1982-1992; Madison County, Ala. district attorney, 1991-1993; special assistant attorney general, state of Alabama, 1995-2002; commissioner, Madison County, Ala., board of commissions, 1996-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412397,
            'bio'        => "GOSAR, Paul, a Representative from Arizona; born in Rock Springs, Sweetwater County, Wyo., November 22, 1958; graduated from Pinedale High School, Pinedale, Wyo., 1977; B.S., Creighton University, Omaha, Nebr., 1981; D.D.S., Creighton University, Omaha, Nebr., 1985; dentist; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
    ];

    private /** @noinspection PhpUnusedPrivateFieldInspection */
        $temp = [
        [
            'govTrackId' => 000,
            'bio'        => "xxx"
        ],
    ];
}