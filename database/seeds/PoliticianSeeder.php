<?php

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use TheRogg\Domain\Office;
use TheRogg\Domain\Party;
use TheRogg\Domain\Politician;
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
            /** @var Politician $politician */
            $politician = $this->politicianRepo->findBy('govTrackId', $bio['govTrackId']);
            if (!empty($politician))
            {
                $politician->setBio($bio['bio']);
                $this->politicianRepo->save($politician);
            }
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
        [
            'govTrackId' => 412399,
            'bio'        => "SCHWEIKERT, David, a Representative from Arizona; born in Los Angeles, Los Angeles County, Calif., on March 3, 1962; A.A., Scottsdale Community College, Scottsdale, Ariz., 1985; B.S., Arizona State University, Tempe, Ariz., 1988; M.B.A., Arizona State University, Tempe, Ariz., 2005; business owner; realtor; financial consultant; member of the Arizona state house of representatives, 1989-1994; member of the Arizona state board of equalization, 1995-2003; Maricopa County, Ariz. treasurer, 2004-2006; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412400,
            'bio'        => "CRAWFORD, Rick, a Representative from Arkansas; born at Homestead Air Force Base, Miami-Dade County, Florida, on January 22, 1966; graduated from Alvirne High School in Hudson, N.H.; United States Army, 1985-1989; B.S., Arkansas State University, Jonesboro, Ark., 1996; journalist; business owner; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412402,
            'bio'        => "WOMACK, Steve, a Representative from Arkansas; born in Russellville, Pope County, Ark., on February 18, 1957; graduated from Russellville High School, Russellville, Ark., 1975; B.A., Arkansas Tech University, Russellville, Ark., 1979; Arkansas Army National Guard, 1979-2009; radio station manager; consultant; member of the Rogers, Ark., city council, 1983-1984 and 1997-1998; Mayor of Rogers, Ark., 1999-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412403,
            'bio'        => "DENHAM, Jeff, a Representative from California; born in Hawthorne, Los Angeles County, California, on July 29, 1967; attended Atascadero High School, Atascadero, Calif.; graduated from Morro Bay High School, Morro Bay, Calif., 1985; A.A.,Victor Valley Junior College, Victorville, Calif., 1989; B.A., California Polytechnic State University, San Luis Obispo, Calif., 1992; United States Air Force, 1984-1988; United States Air Force Reserve, 1988-2000; business owner; member of the California state senate, 2002-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412405,
            'bio'        => "TIPTON, Scott, a Representative from Colorado; born in Espanola, Rio Arriba County, N. Mex., November 9, 1956; graduated from Cortez High School; B.A., Fort Lewis College, Durango, Colo., 1978; business owner; member of the Colorado state house of representatives, 2008-2010; unsuccessful candidate for election to the United States House of Representatives in 2006; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412406,
            'bio'        => "GARDNER, Cory, a Senator and a Representative from Colorado; born in Yuma, Yuma County, Colo., on August 22, 1974; graduated from Yuma High School, Yuma, Colo., 1993; B.A., Colorado State University, Fort Collins, Colo., 1997; J.D., University of Colorado, Boulder, Colo., 2001; agricultural advocate; staff, United States Senator Wayne Allard of Colorado, 2002-2005; member of the Colorado state house of representatives, 2005-2010; elected as a Republican to the One Hundred Twelfth and to the succeeding Congress (January 3, 2011-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412409,
            'bio'        => "NUGENT, Richard, a Representative from Florida; born in Evergreen Park, Cook County, Illinois, on May 26, 1951; B.A., Saint Leo College, Saint Leo, Fla., 1990; M.P.A., Troy State University, Troy, Ala., 1995; Illinois Air National Guard, 1969-1975; deputy sheriff, Hernando County, Fla.; sheriff of Hernando County, Fla., 2000-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412410,
            'bio'        => "WEBSTER, Daniel A., a Representative from Florida; born in Charleston, Kanawha County, West Virginia, on April 27, 1949; graduated from Maynard Evans High School, Orlando, Fla., 1967; B.E.E., Georgia Institute of Technology, Atlanta, Ga., 1971; business owner; member of the Florida state house, 1980-1998, speaker of the house of representatives, 1996-1998; member of the Florida state senate, 1998-2008, majority leader, 2006-2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412411,
            'bio'        => "ROSS, Dennis, a Representative from Florida; born in Lakeland, Polk County, Florida, on October 18, 1959; graduated from Lakeland Senior High School, Lakeland, Fla., 1977; B.S., Auburn University, Auburn, Ala.; J.D., Samford University, Birmingham, Ala.; lawyer, private practice; member of the Florida state house of representatives, 2000-2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412416,
            'bio'        => "WOODALL, Rob, a Representative from Georgia; born in Athens, Clarke County, Ga., February 11, 1970; graduated from Marist School, Atlanta, Ga., 1988; B.A., Furman University, Greenville, S.C., 1992; J.D., University of Georgia School of Law, Athens, Ga., 1998; staff, United States Representative John Linder, 1994-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412417,
            'bio'        => "SCOTT, Austin, a Representative from Georgia; born in Augusta, Richmond County, Ga., December 10, 1969; B.B.A., University of Georgia, Athens, Ga., 1993; business owner; member of the Georgia state house of representatives, 1997-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412419,
            'bio'        => "LABRADOR, Raúl R., a Representative from Idaho; born in Carolina, San Juan County, Puerto Rico, December 8, 1967; B.A., Brigham Young University, Provo, Utah, 1992; J.D., University of Washington, Seattle, Wash., 1995; lawyer, private practice; member of the Idaho state house of representatives, 2006-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412420,
            'bio'        => "DOLD, Robert, a Representative from Illinois; born in Evanston, Cook County, Ill., June 23, 1969; graduated from New Trier High School, Winnetka, Ill., 1987; B.A., Denison University, Granville, Ohio, 1991; J.D., Indiana University, Bloomington, Ind., 1996; M.B.A., Northwestern University Kellogg School of Management, Evanston, Ill., 2000; business owner; staff, United States Vice President James Danforth Quayle, 1991-1993; staff, United States House of Representatives Committee on Reform and Oversight, 1997-1999; elected as a Republican to the One Hundred Twelfth Congress (January 3, 2011-January 3, 2013); unsuccessful candidate for reelection to the One Hundred Thirteenth Congress in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412421,
            'bio'        => "KINZINGER, Adam, a Representative from Illinois; born in Kankakee, Kankakee County, Illinois, February 27, 1978; graduated from Normal West High School, Normal, Ill., 1996; B.A., Illinois State University, Normal, Ill., 2000; sales representative; United States Air Force/Illinois Air National Guard, 2003-present; member of the McLean County, Ill., board, 1998-2003; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412422,
            'bio'        => "HULTGREN, Randy, a Representative from Illinois; born in Park Ridge, Cook County, Ill., March 1, 1966; graduated from Wheaton Academy, West Chicago, Ill., 1984; B.A., Bethel University, St. Paul, Minn., 1988; J.D., Chicago-Kent College of Law, Chicago, Ill., 1993; staff, United States Representative Dennis Hastert of Illinois, 1988-1990; lawyer, private practice; member of the DuPage, Ill., county board, 1994-1998; member of the Illinois state house of representatives, 1999-2007; member of the Illinois state senate, 2007-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412426,
            'bio'        => "ROKITA, Todd, a Representative from Indiana; born in Chicago, Cook County, Ill., February 9, 1970; graduated from Munster High School, Munster, Ind., 1988; B.A., Wabash College, Crawfordsville, Ind., 1992; J.D., Robert H. McKinney School of Law, Indiana University, Indianapolis, Ind., 1995; lawyer, private practice; general counsel, Indiana state secretary of state’s office, 1997-2000; Indiana state deputy secretary of state, 2000-2002; Indiana secretary of state, 2002-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412427,
            'bio'        => "BUCSHON, Larry, a Representative from Indiana; born in Taylorville, Bartholomew County, Ill., May 31, 1962; B.S., University of Illinois, Urbana-Champaign, Ill., 1984; M.D., University of Illinois, Chicago, Ill., 1988; physician; United States Navy Reserve, 1989-1998; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412428,
            'bio'        => "YOUNG, Todd, a Representative from Indiana; born in Lancaster, Lancaster County, Pa., August 24, 1972; graduated from Carmel High School, Carmel, Ind., 1990; B.S., United States Naval Academy, Annapolis, Md., 1995; M.B.A., University of Chicago, Chicago, Ill., 2000; M.A., University of London, London, England, 2001; J.D., Robert H. McKinney School of Law, Indiana University, Indianapolis, Ind., 2006; United States Navy, 1990-1991; United States Marine Corps, 1995-2000; staff, United States Senator Richard Lugar of Indiana, 2001-2003; Orange County, Ind., deputy prosecutor, 2007-2010; consultant; lawyer, private practice; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412429,
            'bio'        => "HUELSKAMP, Tim, a Representative from Kansas; born in Fowler, Meade County, Kans., November 11, 1968; B.A., College of Santa Fe, Santa Fe, N.M., 1991; Ph.D., American University, Washington, D.C., 1995; farmer; legislative analyst; member of Kansas state senate, 1996-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412430,
            'bio'        => "YODER, Kevin, a Representative from Kansas; born in Hutchison, Reno County, Kans., January 8, 1976; B.A., University of Kansas, Lawrence, Kans., 1999; J.D., University of Kansas, Lawrence, Kans., 2002; lawyer, private practice; member of the Kansas state house of representatives, 2002-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412431,
            'bio'        => "POMPEO, Mike, a Representative from Kansas; born in Orange, Orange County, Calif., December 30, 1963; B.S., United States Military Academy, West Point, N.Y., 1986; J.D., Harvard University, Cambridge, Mass., 1994; United States Army, 1986-1991; business executive; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412434,
            'bio'        => "HARRIS, Andy, a Representative from Maryland; born in Brooklyn, Kings County, N.Y., January 25, 1957; B.S., The Johns Hopkins University, Baltimore, Md., 1977; M.D., The Johns Hopkins University, Baltimore, Md., 1980; M.H.S., The Johns Hopkins University, Baltimore, Md., 1995; physician; United States Navy reserve, 1988-2010; member of the Maryland state senate, 1998-2010; minority whip, Maryland state senate; unsuccessful candidate for election to the United States House of Representatives in 2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412436,
            'bio'        => "BENISHEK, Dan, a Representative from Michigan; born in Iron River, Iron County, Mich., April 20, 1952; graduated from West Iron County High School, Iron River, Mich., 1970; B.S., University of Michigan, Ann Arbor, Mich., 1974; M.D., Wayne State University Medical School, Detroit, Mich., 1978; physician; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412437,
            'bio'        => "HUIZENGA, Bill, a Representative from Michigan; born in Zeeland, Ottawa County, Mich., January 31, 1969; graduated from Holland Christian High School, Holland, Mich., 1987; B.A., Calvin College, Grand Rapids, Mich., 1991; administrator; business owner; staff, United States Representative Peter Hoekstra of Michigan, 1996-2002; member of the Michigan state house of representatives, 2003-2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412438,
            'bio'        => "AMASH, Justin, a Representative from Michigan; born in Grand Rapids, Kent County, Mich., April 18, 1980; graduated from Grand Rapids Christian High School, Grand Rapids, Mich., 1998; A.B., University of Michigan, Ann Arbor, Mich., 2002; J.D., University of Michigan, Ann Arbor, Mich., 2005; lawyer, private practice; member of the Michigan state house of representatives, 2008-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412443,
            'bio'        => "PALAZZO, Steven, a Representative from Mississippi; born in Gulfport, Harrison County, Miss., February 21, 1970; graduated from Saint John High School, Gulfport, Miss., 1988; B.S., University of Southern Mississippi, Hattiesburg, Miss., 1994; M.P.A., University of Southern Mississippi, Hattiesburg, Miss., 1996; United States Marine Corps Reserve, 1988-1996; Mississippi Army National Guard, 2007-present; accountant; member of the Mississippi state house of representatives, 2007-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412444,
            'bio'        => "HARTZLER, Vicky, a Representative from Missouri; born in Harrisonville, Cass County, Mo., October 13, 1960; graduated from Archie High School, Archie, Mo., 1979; B.S., University of Missouri, Columbia, Mo., 1983; M.S., University of Central Missouri, Warrensburg, Mo., 1992; teacher; farmer; business owner; member of the Missouri state house of representatives, 1995-2001; chairperson, Missouri Women’s Council, 2005; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412445,
            'bio'        => "LONG, Billy, a Representative from Missouri; born in Springfield, Greene County, Mo., August 11, 1955; attended University of Missouri, Columbia, Mo., 1973-1976; graduated from the Missouri Auction School, 1979; business owner; radio commentator, 1999-2006; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412446,
            'bio'        => "HECK, Joe, a Representative from Nevada; born in Jamaica, Queens County, N.Y., October 30, 1961; graduated from Wallenpaupack Area High School, Hawley, Pa., 1979; B.S., Pennsylvania State University, University Park, Pa., 1984; D.O., Philadelphia College of Osteopathic Medicine, Philadelphia, Pa., 1988; M.S.S., United States Army War College, Carlisle, Pa., 2006; United States Army Reserve, 1991-present; physician; business owner; faculty, Touro University, Henderson, Nevada; faculty, Community College of Southern Nevada; faculty, University of Nevada School of Medicine, Las Vegas, Nevada; faculty, Uniformed Services University, Bethesda, Md., 1998-2003; member of the Nevada state senate, 2004-2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412447,
            'bio'        => "GUINTA, Frank, a Representative from New Hampshire; born in Edison, Middlesex County, N.J., September 26, 1970; graduated from Canterbury School, New Milford, Conn., 1989; B.A., Assumption College, Worcester, Mass., 1993; M.A., Franklin Pierce Law Center, Concord, N.H., 2000; businessman; law clerk, New Hampshire Insurance Department, 1999; member of the New Hampshire state house of representatives, 2000-2002; Manchester, N.H., alderman, 2002-2006; staff, United States Representative Jeb Bradley of New Hampshire, 2003-2004; mayor of Manchester, N.H., 2006-2010; elected as a Republican to the One Hundred Twelfth Congress (January 3, 2011-January 3, 2013); unsuccessful candidate for reelection to the One Hundred Thirteenth Congress in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412453,
            'bio'        => "GIBSON, Christopher, a Representative from New York; born in Rockville Centre, Nassau County, N.Y., May 13, 1964; graduated from Ichabod Crane High School, Kinderhook, N.Y.; B.A., Siena College, Loudonville, N.Y., 1986; M.P.A., Cornell University, Ithaca, N.Y., 1995; Ph.D., Cornell University, Ithaca, N.Y., 1998; New York National Guard, 1981-1986; United States Army, 1986-2010; faculty, United States Military Academy, West Point, N.Y.; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412454,
            'bio'        => "HANNA, Richard, a Representative from New York; born in Utica, Oneida County, N.Y., January 25, 1951; graduated from Whitesboro High School, Marcy, N.Y.; B.A., Reed College, Portland, Oreg., 1976; business owner; unsuccessful candidate for election to the United States House of Representatives in 2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412457,
            'bio'        => "ELLMERS, Renee, a Representative from North Carolina; born in Ironwood, Gogebic County, Mich., February 9, 1964; graduated from Madison High School, Madison Heights, Mich.; B.S., Oakland University, Rochester, Mich., 1990; registered nurse; hospital administrator; member of the Dunn, N.C., planning board, 2006-2010; chair, Dunn, N.C., planning board, 2008-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412460,
            'bio'        => "JOHNSON, Bill, a Representative from Ohio; born in Roseboro, Sampson County, N.C., November 10, 1954; B.S., Troy University, Troy, Ala., 1979; M.S., Georgia Institute of Technology, Atlanta, Ga., 1984; United States Air Force, 1973-1999; business owner; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412461,
            'bio'        => "STIVERS, Steve, a Representative from Ohio; born in Cincinnati, Hamilton County, Ohio, March 24, 1965; graduated from Ripley-Union-Lewis High School, Ripley, Ohio, 1983; B.A., Ohio State University, Columbus, Ohio, 1989; M.B.A., Ohio State University, Columbus, Ohio, 1996; M.A., Army War College, Carlisle, Pa., 2012; Ohio Army National Guard, 1988-2008; staff, Ohio state senate; professional advocate; businessman; member of the Ohio state senate, 2003-2008; unsuccessful candidate for election to the One Hundred Eleventh Congress in 2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412462,
            'bio'        => "RENACCI, Jim, a Representative from Ohio; born in Monongahela, Washington County, Pa., December 3, 1958; graduated from Ringgold High School, Monongahela, Pa., 1976; B.S., Indiana University of Pennsylvania, Indiana, Pa., 1980; business owner; member of the Wadsworth, Ohio, board of zoning appeals, 1994-1995; Wadsworth, Ohio, city council president, 1999-2003; mayor of Wadsworth, Ohio, 2004-2008; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412463,
            'bio'        => "GIBBS, Bob, a Representative from Ohio; born in Peru, Miami County, Ind., June 14, 1954; graduated from Bay Village Senior High School, Bay Village, Ohio, 1972; A.A.S., Ohio State University Agricultural Technical Institute, Wooster, Ohio, 1974; technician; farmer; business owner; president, Ohio Farm Bureau Federation; member of the Ohio state house of representatives, 2003-2009; member of the Ohio state senate, 2009-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412464,
            'bio'        => "LANKFORD, James, a Senator and a Representative from Oklahoma; born in Dallas, Dallas County, Tex., March 4, 1968; B.S., University of Texas, Austin, Tex., 1990; M.Div., Southwestern Theological Baptist Seminary, Ft. Worth, Tex., 1994; youth camp director, 1996-2009; elected as a Republican to the One Hundred Twelfth and to the succeeding Congress (January 3, 2011-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the U.S. Senate in the November 4, 2014, special election to the unexpired portion of the term ending January 3, 2017, left vacant by the resignation of Thomas Coburn; took the oath of office on January 3, 2015."
        ],
        [
            'govTrackId' => 412465,
            'bio'        => "KELLY, Mike, a Representative from Pennsylvania; born in Pittsburgh, Allegheny County, Pa., May 10, 1948; B.A., Notre Dame University, South Bend, Ind., 1970; business owner; member of the Butler Pa., area school board, 1992-1995; member of the Butler County, Pa., council, 2006-2009; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412466,
            'bio'        => "MEEHAN, Patrick, a Representative from Pennsylvania; born in Cheltenham, Montgomery County, Pa., October 20, 1955; graduated from Chestnut Hill Academy, Philadelphia, Pa., 1974; B.A., Bowdoin College, Brunswick, Maine, 1978; J.D., Temple University, Philadelphia, Pa., 1986; lawyer, private practice; United States Attorney for the Eastern District of Pennsylvania, 2001-2008; staff, United States Senator Arlen Specter, 1991-1994; Delaware County, Pa., district attorney, 1996-2001; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412468,
            'bio'        => "MARINO, Thomas A., a Representative from Pennsylvania; born in Williamsport, Lycoming County, Pa., August 15, 1952; graduated from Williamsport Area High School, Williamsport, Pa., 1970; A.A., Williamsport Area Community College, Williamsport, Pa., 1983; B.A., Lycoming College, Williamsport, Pa., 1985; J.D., Dickinson School of Law, Carlisle, Pa., 1988; manufacturing manager; lawyer, private practice; Lycoming County,Pa., district attorney, 1992-2002; United States attorney for the Middle District of Pennsylvania, 1992-2002; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412469,
            'bio'        => "BARLETTA, Lou, a Representative from Pennsylvania; born in Hazleton, Luzerne County, Pa., January 28, 1956; graduated from Hazleton High School, Hazleton, Pa., 1974; attended Bloomsburg University, Bloomsburg, Pa.; professional athlete; business owner; member of the Hazleton, Pa., city council, 1998-2000; Mayor of Hazleton, Pa., 2000-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412471,
            'bio'        => "SCOTT, Tim, a Senator and a Representative from South Carolina; born in North Charleston, Charleston County, S.C., September 19, 1965; attended Presbyterian College, Clinton, S.C., 1983-1984; B.S., Charleston Southern University, Charleston, S.C., 1988; entrepreneur; Charleston County, S.C. council, 1995-2008; unsuccessful candidate for the South Carolina state senate in 1996; member of the South Carolina house of representatives, 2009-2010; elected as a Republican to the One Hundred Twelfth Congress, and served from January 3, 2011, to January 2, 2013, when he resigned to become a U.S. Senator; appointed January 2, 2013, to fill the vacancy caused by the resignation of James DeMint; appointment took effect upon his resignation from the House of Representatives on January 2, 2013; took the oath of office on January 3, 2013; elected in 2014 in a special election for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412472,
            'bio'        => "DUNCAN, Jeff, a Representative from South Carolina; born in Greenville, Greenville County, S.C., January 7, 1966; graduated from Ware Shoals High School, Ware Shoals, S.C., 1984; B.A., Clemson University, Clemson, S.C., 1988; banker; real estate broker; member of the South Carolina state house of representatives, 2003-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412473,
            'bio'        => "GOWDY, Trey, a Representative from South Carolina; born in Greenville, Greenville County, S.C., August 22, 1964; graduated from Spartanburg High School, Spartanburg, S.C., 1982; B.A., Baylor University, Waco, Texas, 1986; J.D., University of South Carolina School of Law, Columbia, S.C., 1989; lawyer, private practice; clerk, South Carolina Court of Appeals; clerk, United States District Court; assistant U. S. attorney, 1994-2000; solicitor, Seventh Judicial Circuit, 2001-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present); chair, Select Committee on the Events Surrounding the 2012 Terrorist Attack in Benghazi (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 412474,
            'bio'        => "MULVANEY, Mick, a Representative from South Carolina; born in Alexandria, Va., July 21, 1967; graduated from Charlotte Catholic High School, Charlotte, N.C., 1985; B.S.F.S., Georgetown University, Washington, D.C., 1989; J.D., University of North Carolina, Chapel Hill, N.C., 1992; lawyer, private practice; real estate developer; member of the South Carolina state house of representatives, 2007-2009; member of the South Carolina state senate, 2009-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412475,
            'bio'        => "NOEM, Kristi, a Representative from South Dakota; born in Watertown, Codington County, S.Dak., November 30, 1971; graduated from Hamlin High School, Hayti, S.Dak., 1990; attended Mount Marty College, Yankton, S.Dak.; attended Northern State University, Aberdeen, S.Dak., 1990-1992; B.A., South Dakota State University, Brookings, S.Dak., 2011; farmer; rancher; member of the South Dakota state house of representatives, 2007-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412476,
            'bio'        => "FLEISCHMANN, Chuck, a Representative from Tennessee; born in Ooltewah, Hamilton County, Tenn., October 11, 1962; B.A., University of Illinois, Urbana-Champaign, Ill., 1983; J.D., University of Tennessee, Knoxville, Tenn., 1986; lawyer, private practice; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412477,
            'bio'        => "DESJARLAIS, Scott, a Representative from Tennessee; born in Des Moines, Polk County, Iowa, February 21, 1964; graduated from Brown High School, Sturgis, S.Dak., 1982; B.S., University of South Dakota, Vermillion, S.Dak., 1987; M.D., University of South Dakota, Vermillion, S.Dak., 1991; physician; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412478,
            'bio'        => "BLACK, Diane, a Representative from Tennessee; born in Baltimore, Md., January 16, 1951; graduated from Andover High School, Linthicum Heights, Md.; A.S.N., Anne Arundel Community College, Arnold, Md., 1971; B.S.N., Belmont University, Nashville, Tenn., 1992; nurse; nonprofit community organization fundraiser; member of the Tennessee state house of representatives, 1999-2005; member of the Tennessee state senate, 2005-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412479,
            'bio'        => "FINCHER, Stephen Lee, a Representative from Tennessee; born in Memphis, Shelby County, Tenn., February 7, 1973; graduated from Crockett County High School, Alamo, Tenn., 1990; farmer; business owner; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412480,
            'bio'        => "FLORES, Bill, a Representative from Texas; born in Cheyenne, Laramie County, Wyo., February 25, 1954; B.B.A., Texas A&M University, College Station, Tex., 1976; M.B.A., Houston Baptist University, Houston, Tex., 1985; certified public accountant; energy company executive; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412482,
            'bio'        => "FARENTHOLD, Blake, a Representative from Texas; born in Corpus Christi, Nueces County, Tex., December 12, 1961; graduated from Incarnate Word High School, Corpus Christi, Tex.; B.S., University of Texas, Austin, Tex., 1985; J.D., St. Mary’s University School of Law, San Antonio, Tex., 1989; lawyer, private practice; business owner; radio commentator; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412483,
            'bio'        => "RIGELL, E. Scott, a Representative from Virginia; born in Titusville, Brevard County, Fla., May 28, 1960; A.A., Brevard Community College, Cocoa, Fla., 1981; B.B.A., Mercer University, Macon, Ga., 1983; M.B.A., Regent University, Virginia Beach, Va., 1990; United States Marine Corps Reserve, 1978-1984; entrepreneur; member of the Virginia Motor Vehicle Dealer Board, 1995-1999; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412484,
            'bio'        => "HURT, Robert, a Representative from Virginia; born in New York, New York County, N.Y., June 16, 1969; graduated from Episcopal High School, Alexandria, Va.; B.A., Hampden-Sydney College, Hampden-Sydney, Va., 1991; J.D., Mississippi College, Clinton, Miss., 1995; lawyer, private practice; deputy attorney, Pittsylvania County, Va.; member of the Chatham, Va., town council, 2000-2001; member of Virginia state house of delegates, 2002-2008; member of Virginia state senate, 2008-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412485,
            'bio'        => "GRIFFITH, H. Morgan, a Representative from Virginia; born in Philadelphia, Philadelphia County, Pa., March 15, 1958; graduated from Andrew Lewis High School, Salem, Va.; B.A., Emory & Henry College, Emory, Va., 1980; J.D., Washington & Lee University School of Law, Lexington, Va., 1983; lawyer, private practice; member of Virginia state house of representatives, 1994-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412486,
            'bio'        => "HERRERA BEUTLER, Jaime, a Representative from Washington; born in Glendale, Los Angeles County, Calif.; November 3, 1978; attended Seattle Pacific University, Seattle, Wash., 1996-1998; A.A., Bellevue Community College, Bellevue, Wash., 2003; B.A., University of Washington, Seattle, Wash., 2004; staff, United States Representative Cathy McMorris Rodgers of Washington, 2005-2007; member of Washington state house of representatives, 2007-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412487,
            'bio'        => "McKINLEY, David, a Representative from West Virginia; born in Wheeling, Ohio County, W. Va., March 28, 1947; B.S.C.E., Purdue University, West Lafayette, Ind., 1969; civil engineer; business owner; member of the West Virginia state house of representatives, 1980-1995; chairman, West Virginia Republican Party, 1990-1994; unsuccessful candidate for the Republican nomination for governor of West Virginia in 1996; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412488,
            'bio'        => "DUFFY, Sean, a Representative from Wisconsin; born in Hayward, Sawyer County, Wis., October 3, 1971; B.A., St. Mary’s College, Winona, Minn., 1994; J.D., William Mitchell College of Law, St. Paul, Minn., 1999; lawyer, private practice; prosecutor, Ashland County, Wis.; acting assistant district attorney and district attorney, Ashland County, Wis., 2002-2010; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412489,
            'bio'        => "RIBBLE, Reid, a Representative from Wisconsin; born in Neenah, Winnebago County, Wis., April 5, 1956; graduated from Appleton East High School, Appleton, Wis., 1974; attended Grand Rapids School of Bible and Music, Grand Rapids, Mich.; business owner; elected as a Republican to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412500,
            'bio'        => "AMODEI, Mark E., a Representative from Nevada; born in Carson City, Carson City County, Nev., June 12, 1958; graduated from Carson High School, Carson City, Nev., 1976; B.A., University of Nevada, Reno, Nev., 1980; J.D., University of the Pacific, McGeorge School of Law, Sacramento, Calif., 1983; United States Army, 1984-1987; lawyer, private practice; member of the Nevada state assembly, 1997; member of the Nevada state senate, 1999-2011; president pro tempore, Nevada state senate, 2003-2005; elected as a Republican to the One Hundred Twelfth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Dean Heller, and reelected to the two succeeding Congresses (September 13, 2011-present)."
        ],
        [
            'govTrackId' => 412503,
            'bio'        => "MASSIE, Thomas, a Representative from Kentucky; born in Huntington, Cabell County, W.Va., January 13, 1971; graduated from Lewis County High School, Vanceburg, Ky.; S.B., Massachusetts Institute of Technology, Cambridge, Mass., 1993; M.S., Massachusetts Institute of Technology, Cambridge, Mass., 1996; business owner; farmer; judge executive, Lewis County, Ky., 2010-2012; elected simultaneously as a Republican to the One Hundred Twelfth Congress and One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Geoffrey C. (Geoff) Davis and reelected to the succeeding Congress (November 6, 2012-present)."
        ],
        [
            'govTrackId' => 412508,
            'bio'        => "COTTON, Tom, a Senator and a Representative from Arkansas; born in Dardanelle, Yell County, Ark., May 13, 1977; A.B., Harvard University, Cambridge, Mass., 1998; attended Claremont Graduate University, Claremont, Calif., 1998-1999; J.D., Harvard University, Cambridge, Mass., 2002; United States Army, 2004-2009; clerk, U.S. Court of Appeals, 2002-2003; lawyer, private practice; management consultant; farmer; elected as a Republican to the One Hundred Thirteenth Congress (January 3, 2013-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412510,
            'bio'        => "LaMALFA, Doug, a Representative from California; born in Oroville, Butte County, Calif., July 2, 1960; attended Las Plumas High School, Oroville, Calif.; graduated from Briggs High School, Briggs, Calif., 1978; A.A., Butte College, Oroville, Calif., 1980; B.S., California Polytechnic State University, San Luis Obispo, Calif., 1982; rice farmer; member of the California state assembly, 2002-2008; member of the California state senate, 2010-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412513,
            'bio'        => "COOK, Paul, a Representative from California; born in Meriden, New Haven County, Conn., March 3, 1943; B.S., Southern Connecticut State University, New Haven, Conn., 1966; M.P.A., California State University, San Bernardino, Calif., 1996; M.A., University of California, Riverside, Calif., 2000; United States Marine Corps, 1966-1992; professor; member of the Yucca Valley, Calif. town council, 1998-2006; Mayor of Yucca Valley, Calif.; member of the California state assembly, 2006-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412515,
            'bio'        => "VALADAO, David G., a Representative from California; born in Hanford, Kings County, Calif., April 14, 1977; graduated from Hanford High School, Hanford, Calif., 1995; attended College of the Sequoias, Visalia, Calif., 1996-1998; farmer; business owner; member of the California state assembly, 2010-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412525,
            'bio'        => "YOHO, Ted, a Representative from Florida; born in Minneapolis, Minneapolis County, Minn., April 13, 1955; graduated from Deerfield Beach High School, Deerfield Beach, Fla., 1973; attended Florence State University (University of North Alabama), Florence, Ala.; A.A., Broward Community College, Fort Lauderdale, Fl., 1977; B.S.A., University of Florida, Gainesville, Fla., 1979; D.V.M., University of Florida, Gainesville, Fla., 1983; large animal veterinarian; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412526,
            'bio'        => "DeSANTIS, Ron, a Representative from Florida; born in Jacksonville, Duval County, Fla., September 14, 1978; graduated from Dunedin High School, Dunedin, Fla., 1997; B.A., Yale University, New Haven, Conn., 2001; J.D., Harvard University, Cambridge, Mass., 2005; United States Navy, 2004-2010; United States Navy Reserve, 2010-present; author; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412531,
            'bio'        => "COLLINS, Doug, a Representative from Georgia; born in Gainesville, Hall County, Ga., August 16, 1966; graduated from North Hall High School, Gainesville, Ga.; B.A., North Georgia College, Dahlonega, Ga., 1988; M.Div., New Orleans Theological Seminary, New Orleans, La., 1996; J.D., John Marshall Law School, Atlanta, Ga., 2008; United States Air Force Reserve, 2007-present; pastor; lawyer, private practice; businessman; member of the Georgia state house of representatives, 2007-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412536,
            'bio'        => "DAVIS, Rodney, a Representative from Illinois; born in Des Moines, Polk County, Iowa, January 5, 1970; attended the public schools in Taylorville, Ill.; B.A., Millikin University, Decatur, Ill., 1992; staff, Illinois secretary of state, 1992-1996; unsuccessful candidate for the Illinois state house of representatives in 1996; staff, United States Representative John Shimkus of Illinois, 1997-2012; unsuccessful candidate for mayor of Taylorville, Ill., in 2001; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412538,
            'bio'        => "WALORSKI, Jackie, a Representative from Indiana; born in South Bend, St. Joseph County, Ind., August 17, 1963; graduated from James Whitcomb Riley High School, South Bend, Ind., 1981; B.A., Taylor University, Upland, Ind., 1985; journalist; philanthropist; member of the Indiana state house of representatives, 2004-2010; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412539,
            'bio'        => "BROOKS, Susan, a Representative from Indiana; born in Auburn, Dekalb County, Ind., August 25, 1960; B.A., Miami University, Oxford, Ohio, 1982; J.D., Indiana University, Indianapolis, Ind., 1985; lawyer, private practice; Indianapolis, Ind., deputy mayor, 1998-1999; U.S. attorney for the Southern District of Indiana, 2001-2007; administrator, Ivy Tech Community College, Indianapolis, Ind.; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412540,
            'bio'        => "MESSER, Luke, a Representative from Indiana; born in Evansville, Vanderburgh County, Ind., February, 27, 1969; graduated from Greensburg Community High School, Greensburg, Ind., 1987; B.A., Wabash College, Crawfordsville, Ind., 1991; J.D., Vanderbilt University, Nashville, Tenn., 1994; lawyer, private practice; staff, United States Representative John J. Duncan, Jr., of Tennessee, 1997; staff, United States Representative Ed Bryant of Tennessee, 1998; staff, United States House of Representatives Committee on Government Reform, 1999; executive director, Indiana Republican Party, 2001-2005; member of the Indiana state house of representatives, 2003-2006; unsuccessful candidate for nomination to the United States House of Representatives in 2000; unsuccessful candidate for nomination to the United States House of Representatives in 2010; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412541,
            'bio'        => "BARR, Garland H. (Andy) IV, a Representative from Kentucky; born in Lexington, Fayette County, Ky., July 24, 1973; graduated from Henry Clay High School, Lexington, Ky., 1992; B.A., University of Virginia, Charlottesville ,Va., 1996; J.D., University of Kentucky College of Law, Lexington, Ky., 2001; attorney, private practice; staff, United States Representative Jim Talent, 1996-1998; instructor, Morehead State University, Morehead, Ky.; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412548,
            'bio'        => "WAGNER, Ann, a Representative from Missouri; born in St. Louis, Mo., September 13, 1962; B.S.B.A., University of Missouri, Columbia, Mo., 1984; businesswoman; chair, Missouri Republican Party, 1999-2005; co-chair, Republican National Committee, 2001-2005; United States Ambassador to Luxembourg, 2005-2009; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412549,
            'bio'        => "DAINES, Steve, a Senator and a Representative from Montana; born in Van Nuys, Los Angeles County, Calif., August 20, 1962; graduated from Bozeman High School, Bozeman, Mont.; B.S., Montana State University, Bozeman, Mont., 1984; businessman; delegate, Republican National Convention, 1984; unsuccessful candidate for lieutenant governor of Montana in 2008; elected as a Republican to the One Hundred Thirteenth Congress (January 3, 2013-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412550,
            'bio'        => "HUDSON, Richard, a Representative from North Carolina; born in Franklin, Va., November 4, 1971; graduated from Myers Park High School, Charlotte, N.C., 1990; B.A., University of North Carolina, Charlotte, 1996; communications director, North Carolina Republican party; business owner; staff, United States Representative Robert (Robin) Hayes of North Carolina, 2000-2005; staff, United States Representative Virginia Ann Foxx of North Carolina, 2005-2006; staff, United States Representative John R. Carter of Texas, 2006-2009; staff, United States Representative K. Michael Conaway of Texas, 2009-2011; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412551,
            'bio'        => "PITTENGER, Robert, a Representative from North Carolina; born in Dallas, Dallas County, Tex., August 15, 1948; B.A., University of Texas, Austin, Tex., 1970; campus ministry organizer; business owner; member of the North Carolina state senate, 2003-2008; unsuccessful candidate for lieutenant governor of North Carolina in 2008; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412552,
            'bio'        => "MEADOWS, Mark, a Representative from North Carolina; born in Verdun, France, July 28, 1959; attended, Florida State University, Tallahassee, Fla.; B.A., University of South Florida, Tampa, Fla.; public relations director; business owner; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412553,
            'bio'        => "HOLDING, George E.B., a Representative from North Carolina; born in Raleigh, Wake County, N.C., April 17, 1968; B.A., Wake Forest University, Winston-Salem, N.C.; J.D., Wake Forest University, Winston-Salem, N.C., 1996; lawyer, private practice; staff, United States Senator Jesse Helms of North Carolina, 1998-2002; assistant United States attorney, Eastern District of North Carolina, 2002-2006; United States attorney, Eastern District of North Carolina, 2006-2011; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412555,
            'bio'        => "CRAMER, Kevin, a Representative from North Dakota; born in Rolla, Rolette County, N.Dak., January 21, 1961; graduated from Kindred High School, Kindred, N.Dak., 1979; B.A., Concordia College, Moorhead, Minn., 1983; M.A., University of Mary, Bismarck, N.Dak., 2003; chairman, North Dakota Republican Party, 1991-1993; North Dakota state tourism director, 1993-1997; unsuccessful candidate for United States House of Representatives in 1996; North Dakota state economic development and finance director, 1997-2000; unsuccessful candidate for United States House of Representatives in 1998; North Dakota public service commissioner, 2003-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412563,
            'bio'        => "COLLINS, Chris, a Representative from New York; born in Schenectady, Schenectady County, N.Y., May 20, 1950; B.S., North Carolina State University, Raleigh, N.C., 1972; M.B.A., University of Alabama, Birmingham, Ala., 1975; businessman; Erie County, N.Y. executive, 2007-2011; unsuccessful candidate for election to the United States House of Representatives in 1998; elected as a Republican to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412564,
            'bio'        => "WENSTRUP, Brad, a Representative from Ohio; born in Cincinnati, Hamilton County, Ohio, June 17, 1958; graduated from St. Xavier High School, Finneytown, Ohio, 1976; B.A., University of Cincinnati, Cincinnati, Ohio, 1980; B.S. and D.P.M., William M. Scholl College of Podiatric Medicine, Chicago, Ill., 1985; United States Army Reserve, 1998-present; physician; unsuccessful candidate for mayor of Cincinnati, Ohio, in 2009; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412566,
            'bio'        => "JOYCE, David, a Representative from Ohio; born in Cleveland, Cuyahoga County, Ohio, March 17, 1957; graduated from West Geauga High School, Chesterland, Ohio, 1976; B.S., University of Dayton, Dayton, Ohio, 1979; J.D., University of Dayton, Dayton, Ohio, 1982; Cuyahoga County, Ohio, public defender, 1983-1984; Geauga County, Ohio, public defender, 1985-1988; Geauga County, Ohio, prosecutor, 1988-2013; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412567,
            'bio'        => "BRIDENSTINE, Jim, a Representative from Oklahoma; born in Ann Arbor, Washtenaw County, Mich., June 15, 1975; graduated from Jenks High School, Tulsa, Okla., 1993; B.A., Rice University, Houston, Texas, 1998; M.B.A., Cornell University, Ithaca, N.Y., 2009; United States Navy, 1998-2007; United States Navy Reserve, 2010-present; defense consultant; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412568,
            'bio'        => "MULLIN, Markwayne, a Representative from Oklahoma; born in Tulsa, Tulsa County, Okla., July 26, 1977; graduated from Stillwell High School, Stillwell, Okla.; attended Missouri Valley College, Marshall, Mo., 1996; A.A.S., Oklahoma State University Institute of Technology, Okmulgee, Okla., 2010; business owner; plumber; rancher; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412569,
            'bio'        => "PERRY, Scott, a Representative from Pennsylvania; born in San Diego, San Diego County, Calif., May 27, 1962; B.S., Pennsylvania State University, University Park, Pa., 1991; Pennsylvania Army National Guard, 1980-present; business owner; member of the Pennsylvania state house of representatives, 2007-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412570,
            'bio'        => "ROTHFUS, Keith, a Representative from Pennsylvania; born in Endicott, Broome County, N.Y., April 25, 1962; graduated from West Seneca West Senior High School, West Seneca, N.Y., 1980; B.S., State University of New York-Buffalo State, 1984; J.D., University of Notre Dame, Notre Dame, Ind., 1990; lawyer, private practice; staff, United States Department of Homeland Security, 2006-2007; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412572,
            'bio'        => "RICE, Tom, a Representative from South Carolina; born in Myrtle Beach, Horry County, S.C., August 4, 1957; B.S., University of South Carolina, Columbia, S.C., 1979; M.A., University of South Carolina, Columbia, S.C., 1982; J.D., University of South Carolina, Columbia, S.C., 1982; lawyer, private practice; accountant; chairman of the Horry County, S.C., council, 2010-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412574,
            'bio'        => "WEBER, Randy, a Representative from Texas; born in Pearland, Brazoria County, Tex., July 2, 1953; attended Alvin Community College in Alvin, Tex., 1971-1974; B.S., University of Houston-Clear Lake, Houston, Tex., 1977; business owner; member of the Pearland, Tex., city council, 1990-1996; member of the Texas state house of representatives, 2008-2012; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412578,
            'bio'        => "WILLIAMS, Roger, a Representative from Texas; born in Evanston, Cook County, Ill., September 13, 1949; graduated from Arlington Heights High School, Fort Worth, Tex.; B.A., Texas Christian University, Fort Worth, Tex., 1972; athletic coach; business owner; Texas secretary of state, 2005-2007; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412581,
            'bio'        => "STEWART, Chris, a Representative from Utah; born in Logan, Cache County, Utah, July 15, 1960; graduated from Sky View High School, Smithfield, Utah, 1978; B.S., Utah State University, Logan, Utah, 1984; United States Air Force, 1984-1998; author; business executive; elected as a Republican to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412596,
            'bio'        => "SMITH, Jason, a Representative from Missouri; born in St. Louis, Mo., on June 16, 1980; graduated from Salem High School, Salem, Mo., 1998; B.S., University of Missouri, Columbia, Mo., 2001; J.D., Oklahoma City University School of Law, Oklahoma City, Oklahoma, 2004; farmer; lawyer, private practice; member of the Missouri state house of representatives, 2005-2013; elected as a Republican to the One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Jo Ann Emerson, and reelected to the succeeding Congress (June 4, 2013-present)."
        ],
        [
            'govTrackId' => 412601,
            'bio'        => "BYRNE, Bradley, a Representative from Alabama; born in Mobile, Mobile County, Ala., February 16, 1955; graduated from University Military School, Mobile, Ala., 1973; B.A., Duke University, Durham, N.C., 1977; J.D., University of Alabama School of Law, Tuscaloosa, Ala., 1980; lawyer, private practice; member of the Alabama state board of education, 1994-2002; member of the Alabama state senate, 2002-2007; chancellor of the Alabama department of postsecondary education, 2007-2009; unsuccessful candidate for nomination for governor of Alabama in 2010; elected as a Republican, by special election, to the One Hundred Thirteenth Congress to fill the vacancy caused by the resignation of United States Representative Josiah Robins (Jo) Bonner, Jr., and to the succeeding Congress (December 17, 2013-Present)."
        ],
        [
            'govTrackId' => 412603,
            'bio'        => "JOLLY, David W., elected as a Representative from Florida; born in Dunedin, Pinellas County, Florida, on October 31, 1972; graduated from Pasco High School, Dade City, Fla., 1990; B.A., Emory University, Atlanta, Ga., 1994; J.D., George Mason University School of Law, Arlington, Va., 2001; staff, Representative Charles William (Bill) Young of Florida, 1994-2006; lawyer, private practice; elected as a Republican to the One Hundred Thirteenth Congress, by special election, to fill a vacancy caused by the death of Representative Charles William (Bill) Young of Florida, and reelected to the succeeding Congress (March 11, 2014-present)."
        ],
        [
            'govTrackId' => 412604,
            'bio'        => "CLAWSON, Curt, a Representative from Florida; born on September 28, 1959; graduated from Batesville High School, Batesville, Ind., 1978; attended University of Utah, Salt Lake City, Utah, 1978-1979; B.A., Purdue University, West Lafayette, Ind., 1984; B.S., Krannert School of Management, Purdue University, West Lafayette, Ind., 1984; M.B.A., Harvard University, Cambridge, Mass., 1990; manufacturer, businessman; elected as a Republican to the One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Trey Radel, and reelected to the succeeding Congress (June 24, 2014-present)."
        ],
        [
            'govTrackId' => 412605,
            'bio'        => "BRAT, David A., a Representative from Virginia; born in Detroit, Wayne County, Mich., July 27, 1964; graduated from Park Center Senior High School, Brooklyn, Minn., 1982; B.A., Hope College, Holland, Mich., 1986; M.Div., Princeton Theological Seminary, Princeton, N.J., 1990; Ph.D., American University, Washington, D.C., 1995; accountant; professor, Randolph-Macon College, Ashland, Va., 1996-present; elected simultaneously as a Republican to the One Hundred Thirteenth and One Hundred Fourteenth Congresses, by special election, to fill the vacancy caused by the resignation of United States Representative Eric Cantor (November 4, 2014-present)."
        ],
        [
            'govTrackId' => 412608,
            'bio'        => "PALMER, Gary James, a Representative from Alabama; born in Haleyville, Winston County, Ala., May 14, 1954; graduated from Hackleburg High School, Hackleburg, Ala., 1972; attended Northwest Alabama Junior College, Phil Campbell, Ala., 1972-1974; B.S., University of Alabama, Tuscaloosa, Ala., 1977; engineer; professional advocate; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412609,
            'bio'        => "HILL, French, a Representative from Arkansas; born in Little Rock, Pulaski County, Ark., December 5, 1956; graduated from Little Rock Catholic High School, Little Rock, Ark., 1975; B.S., Vanderbilt University, Nashville, Tenn., 1979; banker; businessman; staff, United States Senate Committee on Banking, Housing, and Urban Affairs, 1982-1984; deputy assistant, United States Treasury, 1989-1991; special assistant to the President and Executive Secretary of Economic Policy Council, 1991-1993; senior advisor, Governor Mike Huckabee of Arkansas, 2008; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412610,
            'bio'        => "WESTERMAN, Bruce Eugene, a Representative from Arkansas; born in Hot Springs, Hot Springs County, Ark., November 18, 1967; graduated from Fountain Lake High School, Hot Springs, Ark., 1986; B.S., University of Arkansas, Fayetteville, Ark., 1990; M.F., Yale Forestry School, New Haven, Conn., 2001; engineer; member of the Fountain Lake, Ark., school board, 2006-2010; member of the Arkansas state house of representatives 2010-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412611,
            'bio'        => "McSALLY, Martha, a Representative from Arizona; born in Warwick, Kent County, R.I., March 22, 1966; B.S., United States Air Force Academy, Colorado Springs, Colo., 1988; M.P.P., John F. Kennedy School of Government, Harvard University, Cambridge, Mass., 1990; United States Air Force, 1988-2010; fighter pilot; professor; unsuccessful candidate for nomination to the United States House of Representatives in 2012; unsuccessful candidate for election to the United States House of Representatives in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412614,
            'bio'        => "KNIGHT, Steve, a Representative from California; born in Edwards Air Force Base, Edwards, Kern County, Calif., December 17, 1966; graduated from Palmdale High School; A.A., Antelope Valley College, Lancaster, Calif., 2006; United States Army; police officer; member of the Palmdale, Calif., city council, 2005-2008; member of the California state assembly, 2008-2012; assistant minority leader, California state assembly, 2010-2012; vice mayor of Palmdale, Calif.; member of the California state senate, 2012-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412618,
            'bio'        => "WALTERS, Mimi, a Representative from California; born in Pasadena, Los Angeles County, Calif., May 14, 1962; B.A., University of California, Los Angeles, Calif., 1984; sales representative; business executive; member of the Laguna Niguel, Calif., city council, 1996-2004; Mayor of Laguna Niguel, Calif., 2000; member of the California state assembly, 2005-2008; member of the California state senate, 2008-2015; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412619,
            'bio'        => "BUCK, Kenneth Robert, a Representative from Colorado; born in Ossining, Westchester County, N.Y., February 16, 1959; graduated from Ossining High School, Ossining, N.Y., 1977; A.B., Princeton University, Princeton, N.J., 1981; J.D., University of Wyoming, Laramie, Wyo., 1985; business executive; staff, United States House of Representatives Select Committee to Investigate Covert Arms Transactions with Iran, 1986-1987; attorney, United States Department of Justice, 1987-1990; attorney, Office of the United States Attorney, District of Colorado, 1990-2002; Weld County Colorado, district attorney, 2005-2014; unsuccessful candidate for election to the United States Senate in 2010; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412621,
            'bio'        => "CURBELO, Carlos, a Representative from Florida; born in Miami, Miami-Dade County, Fla., March 1, 1980; graduated from Belen Jesuit Preparatory School, Miami, Fla., 1998; B.A., University of Miami, Coral Gables, Fla., 2002; M.A., University of Miami, Coral Gables, Fla., 2011; businessman; staff, United States Senator George LeMieux of Florida, 2009-2011; member of the Miami-Dade County school board, 2010; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412622,
            'bio'        => "CARTER, Buddy, a Representative from Georgia; born in Port Wentworth, Chatham County, Ga., September 6, 1957; graduated from Robert W. Groves High School, Garden City, Ga., 1975; A.A., Young Harris College, Young Harris, Ga., 1977; B.S., University of Georgia, Athens, Ga., 1980; pharmacist; business owner; member of the Pooler, Ga., city council, 1994-1995; mayor of Pooler, Ga., 1996-2004; member of the Georgia state house of representatives, 2005-2009; member of the Georgia state senate, 2009-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412623,
            'bio'        => "HICE, Jody Brownlow, a Representative from Georgia; born in Atlanta, Fulton County, Ga., April 22, 1960; graduated from Tucker High School, Tucker, Ga., 1978; B.A., Asbury College, Wilmore, Ky., 1982; M.Div., Southwestern Baptist Theological Seminary, Fort Worth, Tex., 1986; D.Min., Luther Rice University and Seminary, Lithonia, Ga., 1988; pastor; talk radio host; unsuccessful candidate for nomination to the United States House of Representatives in 2010; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412624,
            'bio'        => "LOUDERMILK, Barry D., a Representative from Georgia; born in Riverdale, Clayton County, Ga., December 22, 1963; A.A., U.S. Air Force Community College, 1987; B.S., Wayland Baptist University, Plainview, Tex., 1992; United States Air Force, 1984-1992; chairman, Bartow County, Ga., Republican party, 2001-2004; business owner; member of the Georgia state house of representatives, 2005-2010; member of the Georgia state senate, 2011-2013; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412625,
            'bio'        => "ALLEN, Rick W., a Representative from Georgia; born in Augusta, Richmond County, Ga., November 7, 1951; graduated from Evans High School, Evans, Ga., 1969; B.S., Auburn University, Auburn, Ala., 1973; business owner; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412627,
            'bio'        => "BLUM, Rod, a Representative from Iowa; born in Dubuque, Dubuque County, Iowa, April 26, 1955; graduated from Dubuque Senior High School, Dubuque, Iowa, 1973; B.A., Loras College, Dubuque, Iowa, 1977; M.B.A., University of Dubuque, Dubuque, Iowa, 1989; business executive; unsuccessful candidate for election to the United States House of Representatives in 2011; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412628,
            'bio'        => "YOUNG, David, a Representative from Iowa; born in Van Meter, Dallas County, Iowa, May 11, 1968; graduated from Johnston High School, Johnston, Iowa, 1986; B.A., Drake University, Des Moines, Iowa, 1991; businessman; staff, United States Senator Hank Brown of Colorado, 1993-1996; staff, campaign manager, United States Senator James Bunning of Kentucky, 1998-2006; Chief of Staff, United States Senator Charles Grassley of Iowa, 2006-2013; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412629,
            'bio'        => "BOST, Mike, a Representative from Illinois; born in Murphysboro, Jackson County, Ill., December 30, 1960; graduated from Murphysboro High School, Murphysboro, Ill., 1979; Certified Firefighter II Academy, University of Illinois, 1993; United Sates Marine Corps, 1979-1982; truck manager; firefighter; business owner; member of the Jackson County Board, Ill., 1984-1988; treasurer of the Murphysboro Township, Ill., 1989-1992; trustee of the Murphysboro Township, Ill., 1993-1995; elected to the Illinois state house of representatives, 1995-present; elected as a Republican to the One Hundred and Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412630,
            'bio'        => "ABRAHAM, Ralph, a Representative from Louisiana; born in Alto, Richland Parish, La., September 16, 1954; graduated from Mangham High School, Mangham, La., 1972; B.A., Louisiana State University, Baton Rouge, La., 1980; D.V.M., Louisiana State University School of Veterinary Medicine, Baton Rouge, La., 1980; M.D., Louisiana State University School of Medicine, New Orleans, La., 1994; Mississippi National Guard Special Forces, 1986-1989; flight instructor; general family practitioner; aviation medical examiner; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412631,
            'bio'        => "GRAVES, Garret, a Representative from Louisiana; born in Baton Rouge, East Baton Rouge Parish, Louisiana, on January 31, 1972; graduated from Catholic High School, Baton Rouge, La., 1990; attended the University of Alabama, Tuscaloosa, Ala., Louisiana Tech University, Ruston, La., and American University, Washington, D.C.; staff, United States Senator John Breaux of Louisiana; staff, United States Representative Billy Tauzin of Louisiana; staff, United States Senator David Vitter of Louisiana; staff, United States Senate Committee on Commerce; staff, United States Senate Committee on Science and Transportation; staff, United States House Committee on Energy and Commerce; appointed to National Resource Damage Assessment, Gulf Coast; chair, the Coastal Protection and Restoration Authority of Louisiana; vice chair of the Gulf Coast Ecosystem Restoration Task Force, U.S. Environmental Protection Agency; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412633,
            'bio'        => "POLIQUIN, Bruce Lee, a Representative from Maine; born in Waterville, Kennebec County, Maine, November 1, 1953; graduated from Phillips Exeter Academy, Exeter, New Hampshire, 1972; A.B., Harvard University, Cambridge, Mass., 1976; businessman; unsuccessful candidate for Governor of Maine in 2010; state treasurer of Maine, 2010-2012; unsuccessful candidate for election to the United States Senate in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412634,
            'bio'        => "MOOLENAAR, John, a Representative from Michigan; born in Midland, Midland County, Mich., May 8, 1961; graduated from Herbert Henry Dow High School, Midland, Mich.; B.S., Hope College, Holland, Mich., 1983; M.P.A., Harvard University, Cambridge, Mass., 1989; chemist; businessman; school administrator; member of the Midland, Mich., city council, 1997-2000; member of the Michigan state house of representatives, 2003-2008; member of the Michigan state senate, 2011-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412635,
            'bio'        => "BISHOP, Michael Dean, a Representative from Michigan; born in Almont, Lapeer County, Mich., March 18, 1967; graduated from Rochester Adams High School, Rochester Hills, Mich.; A.B., University of Michigan, Ann Arbor, Mich., 1989; J.D., Detroit College of Law (now Michigan State College of Law), East Lansing, Mich., 1993; lawyer, private practice; realtor; business owner; member of the Michigan state house of representatives, 1999-2002; member of the Michigan state senate, 2003-2010; majority leader, Michigan state senate, 2007-2010; unsuccessful candidate for nomination for Michigan state attorney general, 2010; unsuccessful candidate for election as Oakland County, Mich., prosecutor, 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412636,
            'bio'        => "TROTT, David A., a Representative from Michigan; born in Birmingham, Oakland County, Mich., October 16, 1960; graduated from the Cranbrook Schools, Bloomfield Township, Mich.; A.B., University of Michigan, Ann Arbor, Mich., 1981; J.D., Duke University, Durham, N.C., 1985; lawyer, private practice; business owner; member of the Bingham Farms, Mich., village council, 1987-1988; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412639,
            'bio'        => "EMMER, Thomas Earl II, a Representative from Minnesota; born in South Bend, St. Joseph County, Ind., March 3, 1961; graduated from St. Thomas Academy, Mendota Heights, Minn.; B.A., University of Alaska, Fairbanks, Alaska, 1984; J.D., Mitchell College of Law, St. Paul, Minn., 1988; radio host; lawyer, private practice; member of the Independence, Minn., city council, 1995-2002; member of the Delano, Minn., city council, 2003-2004; member of the Minnesota state house of representatives, 2004-2010; deputy minority leader, Minnesota state house of representatives, 2007-2008; unsuccessful candidate for Governor of Minnesota in 2004; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412640,
            'bio'        => "ZINKE, Ryan, a Representative from Montana; born in Bozeman, Gallatin County, Mont., November 1, 1961; graduated from Whitefish High School, Whitefish, Mont., 1980; B.S., University of Oregon, Eugene, Ore., 1984; M.B.A., National University, San Diego, Calif., 1991; M.S., University of San Diego, San Diego, Calif., 2003; United States Navy, 1985-2008; business executive; member of the Montana state senate, 2009-2012; unsuccessful candidate for nomination for lieutenant governor of Montana in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412641,
            'bio'        => "ROUZER, David, a Representative from North Carolina; born in Landstuhl, Germany, February 16, 1972; graduated from Northern High School, Durham, N.C.; B.S., North Carolina State University, Raleigh, N.C., 1994; businessman; associate administrator and rural administrator, United States Department of Agriculture, 2005-2006; staff, United States Senator Jesse Helms of North Carolina, 1996-2000; staff, United States Senator Elizabeth Dole of North Carolina, 2003-2005; member of the North Carolina state senate, 2009-2012; unsuccessful candidate for election to the United States House of Representatives in 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412643,
            'bio'        => "MacARTHUR, Thomas Charles, a Representative from New Jersey; born in Hebron, Tolland County, Conn., October 16, 1960; graduated from RHAM High School, Hebron, Conn., 1978; B.A., Hofstra University, Hempstead, N.Y., 1982; insurance executive; member of the Randolph, N.J., city council, 2011-2013; deputy mayor of Randolph, N.J., 2012; mayor of Randolph, N.J., 2013-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412645,
            'bio'        => "HARDY, Cresent Leo, a Representative from Nevada; born in Mesquite, Clark County, Nev., June 23, 1957; graduated from Virgin Valley High School, Mesquite, Nev., 1975; attended Dixie State College, St. George, Utah; business owner; member of the Mesquite, Nev., city council, 1997-2002; member of the Nevada state assembly, 2011-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412646,
            'bio'        => "ZELDIN, Lee M, a Representative from New York; born in East Meadow, Nassau County, N.Y., January 30, 1980; graduated from William Floyd High School, Brookhaven, N.Y., 1998; B.A., State University of New York, Albany, N.Y., 2001; J.D., Albany Law School, Albany, N.Y., 2003; United States Army, 2003-2007; United States Army Reserve, 2007-present; lawyer; unsuccessful candidate for election to the United States House of Representatives in 2008; member of the New York state senate, 2010-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412648,
            'bio'        => "STEFANIK, Elise M, a Representative from New York; born in Albany, Albany County, N.Y., July 2, 1984; graduated from Albany Academy for Girls, Albany, N.Y., 2002; A.B., Harvard University, Cambridge, Mass., 2006; staff, President George W. Bush administration, 2006-2009; campaign aide; businesswoman; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412649,
            'bio'        => "KATKO, John, a Representative from New York; born in Camillus, Onondaga County, N.Y., November 9, 1962; graduated from Bishop Ludden High School, Syracuse, N.Y., 1980; B.A., Niagara University, Lewiston, N.Y., 1984; J.D., Syracuse University, Syracuse, N.Y., 1988; lawyer, private practice; staff, United States Securities and Exchange Commission, 1991-1995; staff, United States Justice Department, 1995-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412650,
            'bio'        => "RUSSELL, Steve, a Representative from Oklahoma; born in Oklahoma City, Oklahoma County, Okla., on May 25, 1963; graduated from Del City High School, Del City, Okla., 1981; B.A., Ouachita Baptist University, Arkadelphia, Ark., 1985; U.S. Army, 1985-2006; author; small business owner; member of the Oklahoma state senate, 2008-2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412651,
            'bio'        => "COSTELLO, Ryan, a Representative from Pennsylvania; born in Chester County, Pa., on September 7, 1976; graduated from Owen J. Roberts High School, Pottstown, Pa., 1995; B.A., Ursinus College, Collegeville, Pa., 1999; LL.B., Villanova University, Villanova, Pa., 2002; lawyer, private practice; member of the board of commissioners, Chester County, Pa., 2011-2013; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412653,
            'bio'        => "RATCLIFFE, John, a Representative from Texas; born in Chicago, Cook County, Ill., October 20, 1965; B.A., University of Notre Dame, Notre Dame, Ind., 1987; J.D., Southern Methodist University, Dallas, Tex., 1989; lawyer, private practice; professor; United States attorney for the Eastern District of Texas, 2007-2008; mayor of Heath, Tex., 2004-2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412654,
            'bio'        => "HURD, William Ballard, a Representative from Texas; born in San Antonio, Bexar County, Tex., August 19, 1977; graduated from John Marshall High School, San Antonio, Tex., 1995; B.S., Texas Agricultural and Mechanical University, College Station, Tex., 2000; business owner; operations officer, Central Intelligence Agency, 2000-2009; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412655,
            'bio'        => "BABIN, Brian, a Representative from Texas; born in Port Arthur, Jefferson County, Tex., March 23, 1948; graduated from Forest Park High School, Beaumont, Tex., 1966; B.S., Lamar University, Beaumont, Tex., 1973; D.D.S., University of Texas, Houston, Tex., 1976; United States Air Force, 1975-1979; Texas Army National Guard, 1969-1975; dentist; alderman, Woodville, Tex., 1981-1982, 1984-1989; mayor of Woodville, Tex., 1982-1984; member, Texas Historical Commission, 1989-1995; member of the Woodville, Tex., school board, 1992-1995; unsuccessful candidate for nomination to the United States House of Representatives in 1996 and 1998; member, Lower Neches Valley Authority, 1999-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412656,
            'bio'        => "LOVE, Ludmya Bourdeau (Mia), a Representative from Utah; born in Brooklyn, Kings County, N.Y., on December 6, 1975; graduated from Norwalk High School, Norwalk, Conn.; B.A., University of Hartford, West Hartford, Conn., 1997; flight attendant; call center operator; member of the Saratoga Springs, Utah, city council, 2003-2009; mayor of Saratoga Springs, Utah, 2010-2013; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412658,
            'bio'        => "COMSTOCK, Barbara J., a Representative from Virginia; born in Springfield, Hampden County, Mass., June 30, 1959; B.A., Middlebury College, Middlebury, Vt., 1981; J.D., Georgetown University, Washington, D.C., 1986; staff, United States Senator Edward Kennedy of Massachusetts; lawyer, private practice; staff, United States Representative Frank Wolf of Virginia, 1991-1995; staff, United States House of Representatives Oversight and Government Reform Committee, 1995-1999; campaign aide; staff, United States Justice Department, 2002-2003; consultant; member of the Virginia state house of delegates, 2009-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412660,
            'bio'        => "NEWHOUSE, Daniel Milton, a Representative from Washington; born in Sunnyside, Yakima County, Wash., July 10, 1955; graduated from Sunnyside High School, Sunnyside, Wash., 1973; B.S., Washington State University, Pullman, Wash., 1977; farmer; member of the Washington state house of representatives, 2003-2009; director of the Washington state department of agriculture, 2009-2013; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412661,
            'bio'        => "GROTHMAN, Glenn, a Representative from Wisconsin; born in Milwaukee, Milwaukee County, Wis., July 3, 1955; graduated from Homestead High School, Mequon, Wisconsin, 1973; B.B.A., University of Wisconsin-Madison, Madison, Wis., 1978; J.D., University of Wisconsin-Madison, Madison, Wis., 1983; lawyer, private practice; member of the Wisconsin state assembly, 1993-2004; member of the Wisconsin state senate, 2004-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412662,
            'bio'        => "MOONEY, Alex X., a Representative from West Virginia; born in Washington, D.C., June 5, 1971; graduated from Frederick High School, Frederick, Md.; A.B., Dartmouth College, Hanover, N.H., 1993; unsuccessful candidate for the New Hampshire state house of representatives, 1992; staff, United States Representative Roscoe Bartlett of Maryland, 1993-1995; member of the Maryland state house of delegates, 1999-2010; chairman, Maryland Republican Party, 2010-2013; member, Republican National Committee, 2011-2013; staff, House Republican Conference, 1995; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412663,
            'bio'        => "JENKINS, Evan H., a Representative from West Virginia; born in Huntington, Cabell County, W.Va., September 12, 1960; B.S., University of Florida, Gainesville, Fla., 1983; J.D., Cumberland School of Law, Samford University, Birmingham, Ala., 1987; lawyer, private practice; businessman; instructor, Marshall University, Huntington, W.Va.; member of the West Virginia state house of delegates, 1994-1998; member of the West Virginia state senate, 2002-2014; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412664,
            'bio'        => "RADEWAGEN, Aumua Amata Coleman, a Delegate from American Samoa; born on December 29, 1947; attended Sacred Hearts Academy, Honolulu, Hawaii; B.S., University of Guam, 1975; attended George Mason University, Fairfax, Va.; attended Loyola Marymount University, Los Angeles, Calif.; journalist; staff, United States Representative Philip Crane of Illinois, 1997-1999; staff, United States Representative Julius Caesar (J.C.) Watts, Jr. of Oklahoma, 1999-2003; staff, House Republican Conference, 2003-2005; unsuccessful candidate for nomination to the United States House of Representatives in 1996 and 2000; unsuccessful candidate for election to the United States House of Representatives in 1994, 1998, 2002, 2004, 2006, 2008, 2010, 2012; elected as a Republican to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412665,
            'bio'        => "SULLIVAN, Daniel Scott, a Senator from Alaska; born in Fairview Park, Cuyahoga County, Ohio, November 13, 1964; graduated Culver Military Academy, Culver, Ind., 1983; B.A., Harvard University, 1987; M.F.S. and J.D., Georgetown University, 1993; United States Marine Corps 1993-1997; United States Marine Corps Reserves 1997-present, attaining the rank of lieutenant colonel; lawyer; White House aide and director on the National Security Council staff during the George W. Bush administration; assistant U.S. secretary of state for economic, energy and business affairs 2006-2009; attorney general of Alaska 2009-2010; commissioner of Alaska Department of Natural Resources 2010-2013; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412666,
            'bio'        => "PERDUE, David Alfred, Jr., a Senator from Georgia; born in Macon, Bibb County, Ga., December 10, 1949; B.S., Georgia Institute of Technology, 1972; M.S., Georgia Institute of Technology, 1976; management consultant; company executive; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412667,
            'bio'        => "ERNST, Joni, a Senator from Iowa; born in Red Oak, Montgomery County, Iowa, July 1, 1970; B.A., Iowa State University, 1992; M.P.A., Columbus College (now Columbus State University), Columbus, Ga., 1995; United States Army Reserves, 1993-2001; Iowa Army National Guard, 2001-present, attaining the rank of lieutenant colonel; auditor of Montgomery County, Iowa, 2005-2011; member of the Iowa state senate 2011-2014; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412668,
            'bio'        => "TILLIS, Thomas Roland (Thom), a Senator from North Carolina; born in Jacksonville, Duval County, Fla., August 30, 1960; B.A., University of Maryland University College, 1997; management consultant; member of the Cornelius (N.C.) board of commissioners 2003-2005; member of the North Carolina house of representatives 2007-2014, serving as speaker of the house 2011-2014; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412669,
            'bio'        => "ROUNDS, Marion Michael (Mike), a Senator from South Dakota; born in Huron, Beadle County, S. Dak., October 24, 1954; B.S., South Dakota State University, 1977; insurance and real estate executive; member of the South Dakota state senate 1991-2000, serving as majority leader 1995-2000; governor of South Dakota 2003-2011; elected as a Republican to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412672,
            'bio'        => "DONOVAN, Daniel M., Jr., a Representative from New York; born in Staten Island, Richmond County, N.Y., November 6, 1956; graduated from Monsignor Farrell High School, Staten Island, N.Y., 1974; B.A., St. John’s University, New York, N.Y., 1978; J.D., Fordham University, New York, N.Y., 1988; detective investigator; youth counselor; Manhattan, N.Y. assistant district attorney, 1989-1996; staff, Staten Island, N.Y. borough president Guy V. Molinari, 1996-2002; Staten Island, N.Y. deputy borough president, 2002-2003; Richmond County, N.Y. district attorney, 2003-2015; elected as a Republican to the One Hundred Fourteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Michael G. Grimm (May 5, 2015-present)."
        ],
        [
            'govTrackId' => 412673,
            'bio'        => "KELLY, Trent, a Representative from Mississippi; born March 1, 1966; B.A., University of Mississippi, University, Miss.; J.D., University of Mississippi, Oxford, Miss.; M.A., United States Army War College, Carlisle, Penn.; United States Army National Guard; lawyer, private practice; prosecutor, Tupelo, Miss., 1999-2011; district attorney, 2012-2015; elected as a Republican to the One Hundred Fourteenth Congress, by special election, to fill the vacancy caused by the death of United States Representative Alan S. Nunnelee (June 2, 2015-present)."
        ],
        [
            'govTrackId' => 300075,
            'bio'        => "MURKOWSKI, Lisa, (daughter of Frank Hughes Murkowski), a Senator from Alaska; born in Ketchikan, Alaska, on May 22, 1957; attended public schools in Fairbanks, AK; attended Williamette University in Salem, Oregon, 1975-1977; B.A. in Economics, Georgetown University 1980; J.D., Willamette College of Law 1985; attorney; member, Alaska Bar Association; Anchorage District Court attorney 1987-1989; private practice 1989-1996; Mayor’s Task Force on the Homeless 1990-1991; Anchorage Equal Rights Commission 1997-1998; Alaska State house of representatives 1999-2002; appointed to the U.S. Senate on December 20, 2002, to fill the vacancy caused by the resignation of her father, Frank H. Murkowski; elected to the U.S. Senate in 2004; unsuccessful candidate for renomination in 2010, but subsequently elected as a write-in candidate in the November 2, 2010, general election, for the term ending January 3, 2017; Republican Conference vice-chair (2009-2010); chair, Committee on Energy and Natural Resources (One Hundred Fourteenth Congress)."
        ],
        [
            'govTrackId' => 300011,
            'bio'        => "LEAHY, Patrick Joseph, a Senator from Vermont; born in Montpelier, Washington County, Vt., March 31, 1940; graduated, St. Michael’s College, Winooski, Vt., 1961; received J.D. degree from Georgetown University 1964; admitted to the Vermont bar in 1964 and commenced practice in Burlington; State’s attorney, Chittenden County, Vt., 1966-1974; elected as a Democrat to the United States Senate in 1974; reelected in 1980, 1986, 1992,1998, 2004 and again in 2010 for the term ending January 3, 2017; president pro tempore (December 17, 2012-January 3, 2015); chair, Committee on Agriculture, Nutrition and Forestry (One Hundredth through One Hundred Third Congresses), Committee on the Judiciary (One Hundred Seventh Congress [January 3-20, 2001; June 6, 2001-January 3, 2003], One Hundred Tenth to One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 300073,
            'bio'        => "MIKULSKI, Barbara Ann, a Senator and a Representative from Maryland; born in Baltimore, Md., July 20, 1936; graduated, Mount St. Agnes College 1958; received a graduate degree from the University of Maryland School of Social Work 1965; social worker in Baltimore; college professor; member, Baltimore City Council 1971-1976; unsuccessful Democratic candidate for the United States Senate in 1974; elected as a Democrat to the Ninety-fifth Congress; reelected to the four succeeding Congresses and served from January 3, 1977, to January 3, 1987; was not a candidate for reelection to the House of Representatives in 1986, but was elected as a Democrat to the United States Senate in 1986; reelected in 1992, 1998, 2004 and again in 2010 for the term ending January 3, 2017; Democratic Conference secretary (1995-2005); chair, Committee on Appropriations (One Hundred Twelfth [December 20, 2012-January 3, 2013] and One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 300076,
            'bio'        => "MURRAY, Patty, a Senator from Washington; born in Seattle, King County, Wash., October 11, 1950; graduated, Washington State University 1972; education volunteer 1977-1984; instructor, Shoreline Community College, Shoreline, Wash., 1984-1987; citizen lobbyist for environmental and educational issues 1983-1988; member, board of directors, Shoreline School District 1985-1989, serving as president and legislative representative for two terms; member, Washington state senate 1988-1992, Democratic whip 1990-1992; elected as a Democrat to the United States Senate in 1992; reelected in 1998, 2004 and again in 2010 for the term ending January 3, 2017; chairwoman, Democratic Senatorial Campaign Committee (2001-2003, 2011-2013), Committee on Veterans Affairs (One Hundred Twelfth Congress), Committee on the Budget (One Hundred Thirteenth Congress); Democratic Conference secretary (2007-)."
        ],
        [
            'govTrackId' => 300082,
            'bio'        => "REID, Harry, a Senator and a Representative from Nevada; born in Searchlight, Nev., December 2, 1939; graduated, Southern Utah State College 1959, Utah State University 1961, and George Washington School of Law 1964; member,United States Capitol Police Force 1961-1964; admitted to the Nevada bar in 1963; city attorney, Henderson, Nev., 1964-1966; member, Nevada State assembly 1969-1970; lieutenant governor 1970-1974; chairman, Nevada Gaming Commission 1977-1981; elected as a Democrat to the Ninety-eighth Congress in 1982; reelected to the Ninety-ninth Congress and served from January 3, 1983, to January 3, 1987; was not a candidate for reelection in 1986 to the House of Representatives; elected to the United States Senate in 1986; reelected in 1992, 1998, 2004 and again in 2010 for the term ending January 3, 2017; chair, Committee on Environment and Public Works (One Hundred Seventh Congress [January 3-20, 2001]), Select Committee on Ethics (One Hundred Seventh Congress [January 3-January 20, 2001; June 6, 2001-January 3, 2003]); co-chair, Senate Democratic Conference, Democratic Policy Committee (1995-1999); Democratic party whip (1999-2005); minority leader (2005-2007; 2015-); majority leader (2007-2015)."
        ],
        [
            'govTrackId' => 300087,
            'bio'        => "SCHUMER, Charles Ellis (Chuck), a Senator and a Representative from New York; born in Brooklyn, N.Y., November 23, 1950; attended the public schools; graduated from Madison High School, Brooklyn 1967; A.B., Harvard University 1971; J.D., Harvard Law School 1974; admitted to the New York bar in 1975; served in the New York State assembly 1975-1980; elected as a Democrat to the Ninety-seventh and to the eight succeeding Congresses (January 3, 1981-January 3, 1999); was not a candidate in 1998 for reelection to the U.S. House of Representatives, but was elected as a Democrat to the United States Senate in 1998; reelected in 2004 and again in 2010 for the term ending January 3, 2017; chair, Democratic Senatorial Campaign Committee (2005-2008); chair, Democratic Policy and Communications Committee (2011-); chair, Joint Economic Committee (One Hundred Tenth and One Hundred Eleventh Congresses), Committee on Rules and Administration (One Hundred Eleventh to One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 300100,
            'bio'        => "WYDEN, Ronald Lee, a Senator and a Representative from Oregon; born in Wichita, Sedgwick County, Kans., May 3, 1949; attended the public schools of Palo Alto, Calif.; A.B., Stanford University 1971; J.D., University of Oregon Law School in Eugene 1974; director, Oregon Legal Services for the Elderly 1977-1979; public member, Oregon State Board of Examiners of Nursing Home Administrators 1977-1979; elected as a Democrat to the Ninety-seventh and to the seven succeeding Congresses, and served from January 3, 1981, to February 5, 1996, when he resigned, having been elected to the Senate; elected to the Senate in a special election on January 30, 1996, to fill the unexpired portion of the term ending January 3, 1999, left vacant by the resignation of Robert W. Packwood, and began service on February 5, 1996; reelected in 1998, 2004 and again in 2010 for the term ending January 3, 2017; chair, Committee on Energy and Natural Resources (One Hundred Thirteenth Congress [January 3, 2013-February 12, 2014]), Committee on Finance (One Hundred Thirteenth Congress [February 12, 2014-January 3, 2015])."
        ],
        [
            'govTrackId' => 412330,
            'bio'        => "BENNET, Michael F., a Senator from Colorado; born in New Delhi, India, November 28, 1964; B.A., Wesleyan University, Middletown, Conn., 1987; J.D., Yale Law School, 1993, editor-in-chief of the Yale Law Journal; counsel to U.S. deputy attorney general 1995-1997; special assistant U.S. attorney, Conn., 1997; managing director, Anschutz Investment Co. 1997-2003; chief of staff to mayor of Denver, Colo., 2003-2005; superintendent, Denver Public Schools 2005-2009; appointed January 21, 2009, to the United States Senate for the term ending January 3, 2011, to fill the vacancy caused by the resignation of Kenneth L. Salazar; took the oath of office on January 22, 2009; elected to the U.S. Senate in 2010 for the term ending January 3, 2017; chair, Democratic Senatorial Campaign Committee (2013-2014)."
        ],
        [
            'govTrackId' => 412490,
            'bio'        => "BLUMENTHAL, Richard, a Senator from Connecticut; born in Brooklyn, N.Y., February 13, 1946; graduated Harvard University, B.A., 1967; attended Cambridge University, 1967-1968; graduated Yale University, J.D., 1973; editor-in-chief of the Yale Law Journal; served in the United States Marine Corps Reserves 1970-1976; White House aide 1969-1970; law clerk to United States Supreme Court Justice Harry A. Blackmun 1974-1975; administrative assistant to Senator Abraham Ribicoff 1975-1976; United States Attorney for Connecticut 1977-1981; lawyer; member of the Connecticut state house of representatives 1984-1987; member of the Connecticut state senate 1987-1990; attorney general of Connecticut 1991-2010; elected as a Democrat to the United States Senate in 2010 for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412582,
            'bio'        => "KAINE, Timothy Michael (Tim), a Senator from Virginia; born in St. Paul, Minn., February 26, 1958; graduated University of Missouri, B.A., 1979; graduated Harvard University, J.D., 1983; lawyer; Richmond City Council 1994-1998; mayor of Richmond, Va., 1998-2001; lieutenant governor of Virginia 2002-2006; governor of Virginia 2006-2010; chairman of the Democratic National Committee 2009-2011; elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412554,
            'bio'        => "HEITKAMP, Mary Kathryn (Heidi), a Senator from North Dakota; born in Breckenridge, Minn., October 30, 1955; graduated University of North Dakota, B.A., 1977; graduated Lewis & Clark College, J.D., 1980; lawyer, Environmental Protection Agency 1980-1981; lawyer, Office of the North Dakota State Tax Commissioner 1981-1986; director, Dakota Gasification Company; tax commissioner of North Dakota 1986-1992; attorney general of North Dakota 1992-2000; unsuccessful Democratic candidate for governor of North Dakota in 2000; elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412542,
            'bio'        => "WARREN, Elizabeth, a Senator from Massachusetts; born in Oklahoma City, Okla., June 22, 1949; attended George Washington University, 1966-1968; graduated University of Houston, B.S., 1970; graduated Rutgers University, J.D., 1976; elementary school teacher; lawyer; law professor; bankruptcy analyst; chair, Congressional Oversight Panel for the Troubled Asset Relief Program 2008-2010; special assistant to President Barack Obama for the Consumer Financial Protection Bureau 2010-2011; elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412391,
            'bio'        => "MANCHIN, Joe, III, a Senator from West Virginia; born August 24, 1947, in Farmington, Marion County, West Virginia; graduated Farmington High School, Farmington, WV, 1965; B.A., West Virginia University, 1970; businessman; member of the West Virginia house of delegates 1982-1986; member of the West Virginia state senate 1986-1996; unsuccessful candidate for the Democratic gubernatorial nomination in 1996; Secretary of State, West Virginia 2000-2004; elected governor of West Virginia in 2004 and reelected in 2008; chairman of the National Governors Association 2010; elected as a Democrat to the U.S. Senate in a special election on November 2, 2010, to fill the vacancy caused by the death of Robert C. Byrd, a seat subsequently held by appointed senator Carte Goodwin, and took the oath of office on November 15, 2010; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412306,
            'bio'        => "PIERLUISI, Pedro, a Resident Commissioner from Puerto Rico; born in San Juan, P.R., April 26, 1959; B.A., Tulane University, New Orleans, La., 1981; J.D., George Washington University, Washington, D.C., 1984; lawyer, private practice; staff, Resident Commissioner Baltasar Corrada del Rio of Puerto Rico; Puerto Rico secretary of justice, 1993-1996; elected as a New Progressive to the One Hundred Eleventh Congress to a four-year term in 2008 and reelected to the succeeding four-year term in 2012 (January 3, 2009-present). "
        ],
        [
            'govTrackId' => 412281,
            'bio'        => "HEINRICH, Martin, a Senator and a Representative from New Mexico; born in Fallon, Churchill County, Nev.; October 17, 1971; B. S., University of Missouri, Columbia, Mo., 1995; attended University of New Mexico, Albuquerque, N. Mex., 2001-2002; engineer; business owner; member, Albuquerque, N. Mex., city council, 2003-2007; president, Albuquerque, N. Mex., city council, 2005-2006; trustee, New Mexico state natural resources, 2006; elected as a Democrat to the One Hundred Eleventh and to the succeeding Congress (January 3, 2009-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412247,
            'bio'        => "WHITEHOUSE, Sheldon, a Senator from Rhode Island; born in Manhattan, N.Y., October 20, 1955; graduated Yale University 1978; J.D., University of Virginia 1982; director, Rhode Island Department of Business Regulation 1992-1994; United States attorney 1994-1998; Rhode Island State attorney general 1999-2003; unsuccessful candidate for governor 2002; elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412246,
            'bio'        => "CASEY, Robert (Bob), Jr., a Senator from Pennsylvania; born in Scranton, Penn., April 13, 1960; graduated College of the Holy Cross 1982; J.D., Catholic University of America 1988; practiced law in Scranton; Pennsylvania auditor general 1997-2005; unsuccessful candidate for governor 2002; Pennsylvania State treasurer 2005-2006; elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019; chair, Joint Economic Committee (One Hundred Twelfth Congress); vice chair, Joint Economic Committee (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 412244,
            'bio'        => "TESTER, Jon, a Senator from Montana; born in Havre, Mont., on August 21, 1956; graduated College of Great Falls 1978, farmer; teacher; member, Big Sandy school board 1983-1992 (chairman 1986-1991); Montana State senate 1999-2006, serving as minority whip 2001-2003, minority leader 2003-2005, president 2005-2006; elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019; chair, Committee on Indian Affairs (One Hundred Thirteenth Congress [February 12, 2014-January 3, 2015]); chair, Democratic Senatorial Campaign Committee (2015-)."
        ],
        [
            'govTrackId' => 412243,
            'bio'        => "McCASKILL, Claire, a Senator from Missouri; born in Rolla, Mo., July 24, 1953; attended Hickman High School in Columbia, Mo.; graduated University of Missouri, Columbia 1975; J.D., University of Missouri, Columbia 1978; Missouri State house of representatives 1982-1988; Jackson County prosecutor 1992-1998; unsuccessful candidate for governor 2004; Missouri State auditor 1998-2006; elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412242,
            'bio'        => "KLOBUCHAR, Amy, a Senator from Minnesota; born in Plymouth, Minn., May 25, 1960; attended the public schools in Plymouth; graduated magna cum laude Yale University 1982; J.D., University of Chicago 1985; practiced law in Minnesota, becoming partner at the law firms of Dorsey & Whitney and Gray Plant Mooty; Hennepin County attorney 1999-2006; elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019. "
        ],
        [
            'govTrackId' => 412223,
            'bio'        => "GILLIBRAND, Kirsten, a Senator and a Representative from New York; born in Albany, Albany County, N.Y., December 9, 1966; A.B., Dartmouth College, Hanover, N.H., 1988; J.D., University of California Los Angeles, Los Angeles, Calif., 1991; lawyer, private practice; special council, United States Housing and Urban Development; elected as a Democrat to the One Hundred Tenth Congress and to the succeeding Congress, and served from January 3, 2007, to January 26, 2009, when she resigned to become a U.S. Senator; appointed January 23, 2009, to fill the vacancy caused by the resignation of Hillary Clinton; appointment took effect upon her resignation from the House of Representatives on January 26, 2009; took the oath of office on January 27, 2009; elected in 2010 in a special election for the term ending January 3, 2013; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412205,
            'bio'        => "DONNELLY, Joe, a Senator and a Representative from Indiana; born in Queens, Queens County, N.Y., September 28, 1955; B.A., University of Notre Dame, Notre Dame, Ind., 1977; J.D., University of Notre Dame, Notre Dame, Ind., 1981; lawyer, private practice; business owner; unsuccessful candidate for the 108th Congress in 2004; elected as a Democrat to the One Hundred Tenth and to the two succeeding Congresses (January 3, 2007-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412200,
            'bio'        => "HIRONO, Mazie, a Senator and a Representative from Hawaii; born in Fukushima, Japan, November 3, 1947; graduated from Kaimuki High School, Honolulu, Hawaii; B.A., University of Hawaii, Manoa, Hawaii, 1970; J.D., Georgetown University, Washington, D.C., 1978; lawyer, private practice; member of the Hawaii state house of representatives, 1981-1994; Hawaii lieutenant governor, 1994-2002; elected as a Democrat to the One Hundred Tenth and to the two succeeding Congresses (January 3, 2007-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 412194,
            'bio'        => "MURPHY, Christopher, a Senator and a Representative from Connecticut; born in White Plains, Westchester County, N.Y., August 3, 1973; B.A., Williams College, Williamstown, Mass., 1996; attended Exeter College, Oxford, England, 1994-1995; J.D., University of Connecticut, Hartford, Conn., 2002; lawyer, private practice; Southington, Conn., planning and zoning commission, 1997-1999; member of the Connecticut state house of representatives, 1999-2003; member of the Connecticut state senate, 2003-2006; elected as a Democrat to the One Hundred Tenth and to the two succeeding Congresses (January 3, 2007-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 300093,
            'bio'        => "STABENOW, Deborah Ann, a Senator and a Representative from Michigan; born in Gladwin, Mich., April 29, 1950; graduated, Clare High School; B.A., Michigan State University, East Lansing 1972; M.S.W. magna cum laude, Michigan State University, 1975; social worker; leadership training consultant; Ingham County commissioner 1975-1978; member, State house of representatives 1979-1990; member, State senate 1991-1994; elected as a Democrat to the One Hundred Fifth and One Hundred Sixth Congresses (January 3, 1997-January 3, 2001); was not a candidate for reelection to the House of Representatives in 2000, but was elected to the United States Senate for the term commencing January 3, 2001; reelected in 2006 and again in 2012 for the term ending January 3, 2019; Democratic Conference secretary (2005-2007); vice-chair, Democratic Policy and Communications Committee (2011-); chair, Committee on Agriculture, Nutrition, and Forestry (One Hundred Twelfth and One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 300078,
            'bio'        => "NELSON, Clarence William (Bill), a Senator and a Representative from Florida; born in Miami, Dade County, Fla., September 29, 1942; attended the Brevard County public schools; graduated from Melbourne High School 1960; B.A., Yale University 1965; J.D., University of Virginia School of Law 1968; admitted to the Florida bar in 1968 and commenced practice in Melbourne in 1970; served in United States Army Reserve 1965-1971; United States Army, active duty, 1968-1970, achieving rank of captain; legislative assistant to Governor Reubin Askew 1971; elected to Florida State house of representatives in 1972 and reelected in 1974 and 1976; elected as a Democrat to the Ninety-sixth and to the five succeeding Congresses (January 3, 1979-January 3, 1991); was not a candidate for reelection in 1990 to the House of Representatives, but was a candidate for nomination for governor of Florida; crewmember on the twenty-fourth flight of the Space Shuttle Columbia, January 12-18, 1986; Florida treasurer and insurance commissioner 1995-2000; elected to the United States Senate in 2000 for the term commencing January 3, 2001; reelected in 2006 and again in 2012 for the term ending January 3, 2019; chair, Special Committee on Aging (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 300043,
            'bio'        => "FEINSTEIN, Dianne, a Senator from California; born in San Francisco, Calif., June 22, 1933; attended the San Francisco public schools and graduated from the Convent of the Sacred Heart High School 1951; graduated, Stanford University 1955; member, California Women’s Board of Terms and Parole 1960-1966; member, San Francisco Board of Supervisors 1970-1978, serving as president 1970-1971, 1974-1975, 1978; mayor of San Francisco 1978-1988; director, Bank of California 1988-1989; co-chair, San Francisco Education Fund’s Permanent Fund 1988-1989; unsuccessful candidate for Governor of California 1990; elected in a special election on November 3, 1992, as a Democrat to the United States Senate to fill the term left vacant by the resignation of Pete Wilson; took office on November 4, 1992, and took the oath of office on November 10, 1992; reelected in 1994, 2000, 2006, and again in 2012 for the term ending January 3, 2019; chair, Committee on Rules and Administration (One Hundred Tenth Congress), Select Committee on Intellegence (One Hundred Eleventh to One Hundred Thirteenth Congresses)."
        ],
        [
            'govTrackId' => 300019,
            'bio'        => "CARPER, Thomas Richard, a Senator and a Representative from Delaware; born in Beckley, Raleigh County, W.Va., January 23, 1947; attended public schools; graduated, Whetstone High School, Columbus, Ohio 1964; B.A., Ohio State University, Columbus 1968; University of Delaware, Newark, M.B.A. 1975; served in the United States Navy 1968-1973; Naval Reserve, commander, 1973-1991; Delaware State treasurer 1976-1983; elected as a Democrat to the Ninety-eighth and to the four succeeding Congresses (January 3, 1983-January 3, 1993); governor of Delaware 1993-2001; chairman of the National Governors Association 1998-1999; elected to the United States Senate in 2000 for term commencing January 3, 2001; reelected in 2006 and again in 2012 for the term ending January 3, 2019; chair, Committee on Homeland Security and Governmental Affairs (One Hundred Thirteenth Congress)."
        ],
        [
            'govTrackId' => 300018,
            'bio'        => "CANTWELL, Maria E., a Senator and a Representative from Washington; born in Indianapolis, Ind., October 13, 1958; attended public schools in Indianapolis; B.A., Miami University of Ohio 1980; pursued an academic course at the Miami University European Center, Luxembourg; public relations consultant; Washington State representative 1987-1993; elected as a Democrat to the 103rd Congress (January 3, 1993-January 3, 1995); unsuccessful candidate for reelection to the 104th Congress; elected as a Democrat to the U.S. Senate on November 7, 2000, for the term commencing January 3, 2001; reelected in 2006 and again in 2012 for the term ending January 3, 2019; chair, Committee on Indian Affairs (One Hundred Thirteenth Congress [January 3, 2013-February 12, 2014]), Committee on Small Business and Entrepreneurship (One Hundred Thirteenth Congress [February 12, 2014-January 3, 2015])."
        ],
        [
            'govTrackId' => 400272,
            'bio'        => "MENENDEZ, Robert, a Senator and a Representative from New Jersey; born in New York, N.Y., on January 1, 1954; graduated from Union Hill High School, Union City, N.J., 1972; B.A., Saint Peter’s College, Jersey City, N.J., 1976; J.D., Rutgers University School of Law, Newark, N.J., 1979; lawyer, private practice; member of the Union City, N.J., board of education 1974-1978, and chief financial officer 1978-1982; mayor of Union City, N.J., 1986-1992; member of the New Jersey state general assembly 1987-1991; member of the New Jersey state senate 1991-1993; elected as a Democrat to the One Hundred Third and to the six succeeding Congresses, and served from January 3, 1993, to January 16, 2006, when he resigned to become a U.S. senator; chair, House Democratic Caucus (One Hundred Eighth through One Hundred Ninth Congresses); appointed on January 17, 2006, to the United States Senate to fill vacancy caused by resignation of Jon S. Corzine; service began on January 17, 2006, and took the oath of office on January 18, 2006; elected to the U.S. Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019; chair, Democratic Senatorial Campaign Committee (2008-2011), Committee on Foreign Relations (One Hundred Thirteenth Congress [February 1, 2013-January 3, 2015])."
        ],
        [
            'govTrackId' => 400064,
            'bio'        => "CARDIN, Benjamin Louis, a Senator and a Representative from Maryland; born in Baltimore, Md., October 5, 1943; attended public schools; graduated from Baltimore City College, Baltimore, Md., 1961; B.A., University of Pittsburgh, Pittsburgh, Pa., 1964; J.D., University of Maryland, Baltimore, Md., 1967; lawyer, private practice; member of the Maryland state house of delegates, 1966-1986, speaker, 1979-1986; elected as a Democrat to the One Hundredth and to the nine succeeding Congresses (January 3, 1987-January 3, 2007); one of the managers appointed by the House of Representatives in 1989 to conduct the impeachment proceedings against Walter L. Nixon, judge of the United States District Court for the District Court of Mississippi; not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2006 for the term commencing January 3, 2007; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 400050,
            'bio'        => "BROWN, Sherrod, a Senator and a Representative from Ohio; born in Mansfield, Richland County, Ohio, November 9, 1952; B.A., Yale University, New Haven, Conn., 1974; M.A., Ohio State University, Ohio, 1981; member of the faculty, Ohio State University, Mansfield, Ohio, 1979-1981; member of the Ohio State house of representatives, 1975-1982; Ohio secretary of state, 1983-1991; elected as a Democrat to the One Hundred Third and to the six succeeding Congresses (January 3, 1993-January 3, 2007); not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2006; reelected in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 400013,
            'bio'        => "BALDWIN, Tammy, a Senator and a Representative from Wisconsin; born in Madison, Dane County, Wis., February 11, 1962; graduated from Madison West High School, Madison, Wis., 1980; A.B., Smith College, Northampton, Mass., 1984; J.D., University of Wisconsin Law School, Madison, Wis., 1989; lawyer, private practice; Dane County, Wis., board of supervisors, 1986-1994; member of the Wisconsin state assembly, 1993-1999; elected as a Democrat to the One Hundred Sixth and to the six succeeding Congresses (January 3, 1999-January 3, 2013); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2012 for the term ending January 3, 2019."
        ],
        [
            'govTrackId' => 300038,
            'bio'        => "DURBIN, Richard Joseph, a Senator and a Representative from Illinois; born in East St. Louis, St. Clair County, Ill., November 21, 1944; graduated from Assumption High School, East St. Louis 1962; B.S., Georgetown University School of Foreign Service, Washington, DC 1966; intern in the office of Illinois Senator Paul Douglas during his senior year in college; J.D., Georgetown University Law Center 1969; admitted to the Illinois bar 1969, and commenced practice in Springfield; legal counsel to Illinois Lieutenant Governor Paul Simon 1969-1972; legal counsel, Illinois State senate judiciary committee 1972-1982; Democratic nominee for lieutenant governor of Illinois 1978; associate professor, Southern Illinois University School of Medicine, Springfield 1978-1983; delegate, Democratic National Conventions 1984, 1988, 1992 and 1996; chairman of Illinois state delegation in 1996; elected as a Democrat to the Ninety-eighth and to the six succeeding Congresses (January 3, 1983-January 2, 1997); elected as a Democrat to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021; Democratic party whip (2005-)."
        ],
        [
            'govTrackId' => 300081,
            'bio'        => "REED, John F. (Jack), a Senator and a Representative from Rhode Island; born in Providence, R.I., November 12, 1949; attended St. Matthew’s Elementary School, Cranston, R.I.; graduated, LaSalle Academy, Providence, R.I., 1967; B.S., United States Military Academy, West Point 1971; M.P.P., Kennedy School of Government, Harvard University 1973; J.D., Harvard Law School 1982; served in the U.S. Army 1971-1979 and Army Reserve 1979-1991; associate professor, Department of Social Sciences, U.S. Military Academy 1977-1979; admitted to the Washington, D.C. bar 1983; lawyer; member, Rhode Island State senate 1985-1990; elected as a Democrat to the One Hundred Second and to the two succeeding Congresses (January 3, 1991-January 2, 1997); was not a candidate for reelection to the House of Representatives in 1996, but was elected to the United States Senate in 1996; reelected in 2002, 2008, and again in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 400021,
            'bio'        => "BECERRA, Xavier, a Representative from California; born in Sacramento, Sacramento County, Calif., January 26, 1958; B.A., Stanford University, Stanford, Calif., 1980; J.D., Stanford University, Stanford., Calif., 1984; lawyer, private practice; staff, California state senator Art Torres, 1986; deputy attorney general, Office of the Attorney General, State of California, 1987-1990; member of the California state assembly, 1990-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, House Democratic Caucus (One Hundred Thirteenth and One Hundred Fourteenth Congresses)."
        ],
        [
            'govTrackId' => 400030,
            'bio'        => "BISHOP, Sanford Dixon, Jr., a Representative from Georgia; born in Mobile, Mobile County, Ala., February 4, 1947; graduated from Central High School, Mobile, Ala., 1964; B.A., Morehouse College, Atlanta, Ga., 1968; J.D., Emory University School of Law, Atlanta, Ga., 1971; lawyer, private practice; United States Army, 1969-1971; member of the Georgia state house of representatives, 1977-1991; member of the Georgia state senate, 1991-1993; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present). "
        ],
        [
            'govTrackId' => 400033,
            'bio'        => "BLUMENAUER, Earl, a Representative from Oregon; born in Portland, Multnomah County, Oreg., August 16, 1948; graduated from Centennial High School, Portland, Oreg., 1966; B.A., Lewis and Clark College, Portland, Oreg., 1970; J.D., Lewis and Clark Law School, Portland, Oreg., 1976; assistant to the president of Portland State University, Portland, Oreg., 1970-1977; member of the Oregon state house of representatives, 1973-1978; Portland Community College member of the board of directors, 1975-1981; Multnomah County, Oreg., commissioner, 1978-1985; Portland, Oreg., city commissioner, 1986-1996; served on the Governor’s commission on higher education, 1990-1991; elected as a Democrat, by special election, to the One Hundred Fourth Congress to fill the vacancy caused by the resignation of United States Representative Ronald L. Wyden, and reelected to the ten succeeding Congresses (May 21, 1996-present). "
        ],
        [
            'govTrackId' => 400041,
            'bio'        => "BORDALLO, Madeleine, a Delegate from Guam; born in Graceville, Big Stone County, Minn., May 31, 1933; graduated from George Washington High School, Mangilao, Guam, 1951; attended St. Mary’s College, South Bend, Ind.; attended, St. Katherine’s College, St. Paul, Minn., 1953; member of the Guam legislature, 1981-1982, 1987-1994; unsuccessful candidate for Governor of Guam in 1990; lieutenant governor of Guam, 1995-2002; elected as a Democrat to the One Hundred Eighth Congress and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400047,
            'bio'        => "BRADY, Robert A., a Representative from Pennsylvania; born in Philadelphia, Philadelphia County, Pa., April 7, 1945; graduated from St. Thomas More High School, Philadelphia, Pa.; union official; sergeant-at-arms, Philadelphia, Pa., city council, 1975-1983; chair, Philadelphia, Pa. Democratic Party; member of the Pennsylvania Democratic state committee and Democratic National Committee; member of the Pennsylvania turnpike commission, 1991-1998; elected as a Democrat to the One Hundred Fifth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Thomas Foglietta and reelected to the nine succeeding Congresses (May 19, 1998-present);chair, Committee on House Administration (One Hundred Tenth and One Hundred Eleventh Congresses). "
        ],
        [
            'govTrackId' => 400048,
            'bio'        => "BROWN, Corrine, a Representative from Florida; born in Jacksonville, St. John County, Fla., November 11, 1946; B.S., Florida Agricultural and Mechanical University, Tallahassee, Fla., 1969; M.A., Florida Agricultural and Mechanical University, Tallahassee, Fla., 1971; Ed.S., University of Florida, Gainesville, Fla., 1974; faculty, University of Florida, Gainesville, Fla., Edward Waters College, Jacksonville, Fla., and Florida Community College, Jacksonville, Fla.; member of the Florida state house of representatives, 1983-1993; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present). "
        ],
        [
            'govTrackId' => 400062,
            'bio'        => "CAPPS, Lois, (wife of Walter Capps), a Representative from California; born in Ladysmith, Rusk County, Wis., January 10, 1938; graduated from Flathead County High School, Kalispell, Mont., 1955; B.S., Pacific Lutheran University, Tacoma, Wash., 1959; M.A., Yale University, New Haven, Conn., 1964; M.A., University of California, Santa Barbara, Calif., 1990; nursing instructor; nurse administrator, Yale Hospital, New Haven, Conn.; director, Teenage Pregnancy and Parenting Project and the Parent and Child Enrichment Center, Santa Barbara County, Calif.; instructor, Santa Barbara City College, Santa Barbara, Calif.; elected as a Democrat to the One Hundred Fifth Congress, by special election, to fill the vacancy caused by the death of her husband, United States Representative Walter Capps, and reelected to the nine succeeding Congresses (March 10, 1998-present). "
        ],
        [
            'govTrackId' => 400063,
            'bio'        => "CAPUANO, Michael Everett, a Representative from Massachusetts; born in Somerville, Middlesex County, Mass., January 9, 1952; graduated from Somerville High School, Somerville, Mass., 1969; A.B., Dartmouth College, Hanover, N.H., 1973; J.D., Boston College, Chestnut Hill, Mass., 1977; lawyer, private practice; chief legal counsel, joint committee on taxation, Massachusetts state legislature, 1978-1984; alderman, Somerville, Mass., 1977-1979; alderman-at-large, Somerville, Mass., 1985-1989; Mayor of Somerville, Mass., 1990-1998; Democratic state committeeman, 1996; president, Massachusetts Municipal Association, 1998; elected as a Democrat to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present). "
        ],
        [
            'govTrackId' => 400074,
            'bio'        => "CLAY, William Lacy, Jr., (son of William Lacy Clay, Sr.), a Representative from Missouri; born in St. Louis, Mo., July 27, 1956; graduated from Springbrook High School, Silver Spring, Md., 1974; B.A., University of Maryland, College Park, Md., 1983; member of the Missouri state house of representatives, 1983-1991; member of the Missouri state senate, 1991-2001; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400075,
            'bio'        => "CLYBURN, James Enos, (relative of George Washington Murray), a Representative from South Carolina; born in Sumter, Sumter County, S.C., July 21, 1940; graduated from Mather Academy, Camden, S.C., 1957; B.S., South Carolina State University, Orangeburg, S.C., 1961; teacher; employment counselor, South Carolina state employment security commission, 1965-1966; director, Charleston County, S.C., neighborhood youth corps and new careers projects, 1966-1968; executive director, South Carolina state commission for farm workers, 1968-1971; staff, Governor John C. West of South Carolina, 1971-1974; South Carolina human affairs commissioner, 1974-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, House Democratic Caucus (One Hundred Ninth Congress); majority whip (One Hundred Tenth and One Hundred Eleventh Congresses); assistant Democratic leader (One Hundred Twelfth through One Hundred Fourteenth Congresses). "
        ],
        [
            'govTrackId' => 400080,
            'bio'        => "CONYERS, John, Jr., a Representative from Michigan; born in Detroit, Wayne County, Mich., May 16, 1929; attended Detroit public schools; B.A., Wayne State University, Detroit, Mich., 1957; LL.B., Wayne State Law School, Detroit, Mich., 1958; lawyer, private practice; Michigan National Guard, 1948-1950; United States Army, 1950-1954; United States Army Reserves, 1954-1957; staff, United States Representative John D. Dingell, Jr., of Michigan, 1958-1961; general counsel for three labor locals in Detroit, 1959-1964; executive board member, Detroit, Mich., American Civil Liberties Union, 1964 to present; executive board member, Detroit, Mich., NAACP, 1963 to present; referee for Michigan workmen’s compensation department, 1961-1963; elected as a Democrat to the Eighty-ninth and to the twenty-five succeeding Congresses (January 3, 1965-present); one of the managers appointed by the House of Representatives in 1988 to conduct the impeachment proceedings against Alcee Lamar Hastings, judge of the United States District Court for the Southern District of Florida; chair, Committee on Government Operations (One Hundred First through One Hundred Third Congresses); chair, Committee on the Judiciary (One Hundred Tenth and One Hundred Eleventh Congresses). "
        ],
        [
            'govTrackId' => 400081,
            'bio'        => "COOPER, James Hayes Shofner, a Representative from Tennessee; born in Nashville, Davidson County, Tenn., June 19, 1954; graduated from Groton School, Groton, Mass., 1972; B.A., University of North Carolina (Morehead Scholar), Chapel Hill, N.C., 1975; M.A., Oxford University (Rhodes Scholar), Oxford, England, 1977; J.D., Harvard University Law School, Cambridge, Mass., 1980; lawyer, private practice; adjunct professor, Vanderbilt University, Nashville, Tenn.; elected as a Democrat to the Ninety-eighth and to the five succeeding Congresses (January 3, 1983-January 3, 1995); was not a candidate for reelection to the One Hundred Fourth Congress in 1994, but was an unsuccessful candidate for election to the United States Senate; investment banker; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present). "
        ],
        [
            'govTrackId' => 400087,
            'bio'        => "CROWLEY, Joseph, a Representative from New York; born in New York, New York County, N.Y., March 16, 1962; graduated from Power Memorial High School, New York, N.Y., 1981; B.A., Queens College, City University of New York, Flushing, N.Y., 1985; member of the New York state assembly, 1986-1998; elected as a Democrat to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present). "
        ],
        [
            'govTrackId' => 400090,
            'bio'        => "CUMMINGS, Elijah Eugene, a Representative from Maryland; born in Baltimore, Md., January 18, 1951; graduated from Baltimore City College High School, Baltimore, Md., 1969; B.S., Howard University, Washington, D.C., 1973; J.D., University of Maryland School of Law, Baltimore, Md., 1976; lawyer, private practice; chief judge, Maryland Moot Court Board; member of the Maryland state house of delegates, 1983-1996, and speaker pro tempore, 1995-1996; elected as a Democrat to the One Hundred Fourth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Kweisi Mfume, and reelected to the ten succeeding Congresses (April 16, 1996-present). "
        ],
        [
            'govTrackId' => 400093,
            'bio'        => "DAVIS, Danny K., a Representative from Illinois; born in Parkdale, Ashley County, Ark., September 6, 1941; graduated from Savage High School, 1957; B.A., Arkansas A.M. & N. College, 1961; M.S., Chicago State University, Chicago, Ill., 1968; Ph.D., Union Institute, Cincinnati, Ohio, 1977; clerk, Chicago, Ill., Post Office, 1961-1965; teacher, Chicago, Ill., Public Schools, 1962-1968; executive director, Greater Lawndale Conservation Commission, 1969; director of training, Martin L. King Neighborhood Health Center, 1969-1971; executive director, Westside Health Center, 1975-1981; alderman, Chicago, Ill., city council, 1979-1990; commissioner, Cook County, Ill., board, 1990-1996; college professor; unsuccessful candidate for election to the United States House of Representatives in 1984 and 1986; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400097,
            'bio'        => "DAVIS, Susan A., a Representative from California; born in Cambridge, Middlesex County, Mass., April 13, 1944; B.A., University of California, Berkeley, Calif., 1965; M.S.W., University of North Carolina, Chapel Hill, N.C., 1968; member of the San Diego, Calif., board of education, 1983-1992, president, San Diego, Calif., board of education 1989-1992; executive director, Aaron Price Fellows, 1990-1994; member of the California state assembly, 1994-2000; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400100,
            'bio'        => "DeFAZIO, Peter Anthony, a Representative from Oregon; born in Needham, Norfolk County, Mass., May 27, 1947; B.A., Tufts University, Medford, Mass., 1969; M.A., University of Oregon, Eugene, Oreg., 1977; United States Air Force Reserve, 1967-1971; staff, United States Representative James H. Weaver of Oregon, 1977-1982; member of the Lane County, Oreg., board of commissioners, 1983-1986; chair, Lane County, Oreg., board of commissioners, 1985-1986; unsuccessful candidate for nomination to the United States Senate in a special primary election in 1995; elected as a Democrat to the One Hundredth and to the fourteen succeeding Congresses (January 3, 1987-present). "
        ],
        [
            'govTrackId' => 400101,
            'bio'        => "DeGETTE, Diana, a Representative from Colorado; born in Tachikawa, Japan, July 29, 1957; graduated from South High School, Denver, Colo., 1975; B.A., Colorado College, Colorado Springs, Colo., 1979; J.D., New York University, New York, N.Y., 1982; member of the Colorado state house of representatives, 1992-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400103,
            'bio'        => "DeLAURO, Rosa L., a Representative from Connecticut; born in New Haven, New Haven County, Conn., March 2, 1943; graduated Laurelton Hall High School, West Haven, Conn.; B.A., Marymount College, Tarrytown, N.Y., 1964; attended the London School of Economics, London, England, 1962-1963; M.A., Columbia University, New York, N.Y., 1966; staff to Mayor Frank Logue of New Haven, Conn., 1976-1977; campaign manager, Mayor Frank Logue, 1978; staff, New Haven, Conn., development administrator, 1977-1979; campaign manager for United States Senator Christopher J. Dodd of Connecticut, 1979-1980; staff, United States Senator Christopher J. Dodd of Connecticut, 1981-1987; executive director, Countdown ‘87, 1987-1988; executive director, EMILY’S List, 1989-1990; elected as a Democrat to the One Hundred Second and to the twelve succeeding Congresses (January 3, 1991-present). "
        ],
        [
            'govTrackId' => 400111,
            'bio'        => "DOGGETT, Lloyd Alton, II, a Representative from Texas; born in Austin, Travis County, Tex., October 6, 1946; graduated from Austin High School, Austin, Tex., 1964; B.A., University of Texas, Austin, Tex., 1967; J.D., University of Texas School of Law, 1970; member of the Texas state senate, 1973-1985; Justice of the Texas supreme court, 1989-1994; adjunct professor, University of Texas School of Law, Austin, Tex., 1989-1994; unsuccessful candidate for election to the United States Senate in 1984; elected as a Democrat to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present). "
        ],
        [
            'govTrackId' => 400114,
            'bio'        => "DOYLE, Michael F., a Representative from Pennsylvania; born in Swissvale, Allegheny County, Pa., August 5, 1953; graduated from Swissvale Area High School, Swissvale, Pa., 1971; B.S., Pennsylvania State University, University Park, Pa., 1975; member of the Swissvale, Pa., borough council, 1977-1981; staff, Pennsylvania state senator Frank Pecora, 1979-1994; elected as a Democrat to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present). "
        ],
        [
            'govTrackId' => 400122,
            'bio'        => "ENGEL, Eliot Lance, a Representative from New York; born in New York, N.Y., February 18, 1947; attended Bronx public schools; B.A., Hunter-Lehman College, City University of New York, New York, N.Y., 1969; M.A., Herbert H. Lehman College, City University of New York, New York, N.Y., 1973; J.D., New York Law School, New York, N.Y., 1987; teacher; member of the New York state assembly, 1977-1988; elected as a Democrat to the One Hundred First and to the thirteen succeeding Congresses (January 3,1989-present). "
        ],
        [
            'govTrackId' => 400124,
            'bio'        => "ESHOO, Anna Georges, a Representative from California; born in New Britain, Hartford County, Conn., December 13, 1942; A.A., Canada College, Redwood City, Calif., 1975; Democratic National Committeewoman from California, 1980-1992; staff, speaker pro tempore of the California state assembly, 1981-1982; member of the San Mateo County, Calif., board of supervisors, 1983-1992; president, San Mateo County, Calif. board of supervisors, 1986; member, California Democratic State Central Executive Committee; member of the Democratic National Commission on Presidential Nominations, 1982; unsuccessful candidate for election to the United States House of Representatives in 1988; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3,1993-present).  "
        ],
        [
            'govTrackId' => 400129,
            'bio'        => "FARR, Sam, a Representative from California; born in San Francisco, Calif., July 4, 1941; graduated from Carmel High School, Carmel, Calif., 1959; B.S., Willamette University, Salem, Oreg., 1963; attended Santa Clara University, Santa Clara, Calif..; attended the Monterey Institute of International Studies, Monterey, Calif.; United States Peace Corps, 1963-1965; staff, California state assembly; member of the Monterey County, Calif., board of supervisors, 1975-1980; chair, Monterey County, Calif., board of supervisors, 1979; member of the California state assembly, 1980-1993; elected as a Democrat to the One Hundred Third Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Leon Panetta, and reelected to the eleven succeeding Congresses (June 8, 1993-present). "
        ],
        [
            'govTrackId' => 400130,
            'bio'        => "FATTAH, Chaka, a Representative from Pennsylvania; born in Philadelphia, Philadelphia County, Pa., November 21, 1956; attended Overbrook High School, Philadelphia, Pa.; Community College of Philadelphia, Philadelphia, Pa.; University of Pennsylvania’s Wharton School, Philadelphia, Pa., 1977; M.A., University of Pennsylvania’s Fels School of State and Local Government, Philadelphia, Pa., 1986; attended John F. Kennedy School of Government, Harvard University, Cambridge, Mass., 1984; special assistant to director of housing and community development, Philadelphia, Pa., 1980; special assistant to managing director of housing and community development, Philadelphia, Pa., 1981; policy assistant, Greater Philadelphia Partnership; member of the Pennsylvania state house of representatives, 1982-1988; member of the Pennsylvania state senate, 1988-1994; elected as a Democrat to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present). "
        ],
        [
            'govTrackId' => 400160,
            'bio'        => "GREEN, Raymond Eugene (Gene), a Representative from Texas; born in Houston, Harris County, Tex., October 17, 1947; graduated from Jefferson Davis High School, Houston, Tex., 1967; B.B.A., University of Houston, Houston, Tex., 1971; attended University of Houston, Bates College of Law, Houston, Tex., 1973-1977; lawyer, private practice; business executive; member of the Texas state house of representatives, 1973-1985; member of the Texas state senate, 1985-1993; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Committee on Standards of Official Conduct (One Hundred Tenth Congress). "
        ],
        [
            'govTrackId' => 400162,
            'bio'        => "GRIJALVA, Raúl M., a Representative from Arizona; born in Tucson, Pima County, Ariz., February 19, 1948; graduated from Sunnyside High School, Tucson, Ariz.; B.A., University of Arizona, Tucson, Ariz., 1986; member of the Tucson, Ariz., Unified School Board, 1974-1986; Pima County, Ariz. supervisor, 1989-2002; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present). "
        ],
        [
            'govTrackId' => 400163,
            'bio'        => "GUTIÉRREZ, Luis V., a Representative from Illinois; born in Chicago, Cook County, Ill., December 10, 1953; B.A., Northeastern Illinois University, DeKalb, Ill., 1974; teacher; social worker, Illinois state department of children and family services; administrative assistant, Chicago, Ill., mayor’s office subcommittee on infrastructure, 1984-1985; co-founder, West Town-26th Ward Independent Political Organization, 1985; alderman, Chicago, Ill., city council, 1986-1993, president pro tem, 1989-1992; delegate, Democratic National Committee, 1984; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present). "
        ],
        [
            'govTrackId' => 400170,
            'bio'        => "HASTINGS, Alcee Lamar, a Representative from Florida; born in Altamonte Springs, Seminole County, Fla., September 5, 1936; graduated Crooms Academy, Sanford, Fla, 1953; B.A., Fisk University, Nashville, Tenn., 1958; attended Howard University School of Law, Washington, D.C., 1958-1960; J.D., Florida Agricultural and Mechanical University, Tallahassee, 1963; lawyer, private practice; Broward County, Fla., circuit court judge, 1977-1979; United States district judge for the Southern District of Florida, 1979-1989; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present). "
        ],
        [
            'govTrackId' => 400179,
            'bio'        => "HINOJOSA, Rubén, a Representative from Texas; born in Edcouch, Hidalgo County, Tex., August 20, 1940; attended Mercedes High School, Mercedes, Tex.; B.B.A., University of Texas, Austin, Tex., 1962; M.B.A., University of Texas-Pan American, Edinburg, Tex., 1980; business executive; member of the Texas state board of education, 1974-1984; adjunct professor, University of Texas-Pan American School of Business, Edinburg, Tex.; chairman, board of South Texas Community College for Hidalgo and Starr Counties, Tex., 1993-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400185,
            'bio'        => "HONDA, Mike, a Representative from California; born in Walnut Grove, Solano County, Calif., June 27, 1941; graduated from San Jose High School, San Jose, Calif., 1959; B.A., San Jose State University, San Jose, Calif., 1968; M.A., San Jose State University, San Jose, Calif., 1974; United States Peace Corps, 1965-1967; member of the San Jose, Calif. planning commission, 1971-1981; member of the San Jose, Calif., unified school board, 1981-1990; member of the Santa Clara County, Calif., board of supervisors, 1990-1996; member of the California state assembly, 1997-2000; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400189,
            'bio'        => "HOYER, Steny Hamilton, a Representative from Maryland; born in New York City, N.Y., June 14, 1939; graduated from Suitland High School, Suitland, Md., 1957; B.S., University of Maryland, College Park, 1963; J.D., Georgetown University Law Center, Washington, D.C., 1966; lawyer, private practice; member of the Maryland state senate, 1966-1979, and president, 1975-1979; member of the Maryland state board for higher education, 1978-1981; delegate to Democratic National Conventions, 1968, 1974, 1976, and 1984; elected as a Democrat to the Ninety-seventh Congress, by special election, to fill the vacancy created by H. Res. 80, which declared United States Representative Gladys Noon Spellman’s seat vacant due to an incapacitating illness, and reelected to the seventeen succeeding Congresses (May 19, 1981-present); chair, House Democratic Caucus (One Hundred First through One Hundred Third Congresses); minority whip (One Hundred Eighth, One Hundred Ninth, and One Hundred Twelfth through One Hundred Fourteenth Congresses); majority leader (One Hundred Tenth and One Hundred Eleventh Congresses). "
        ],
        [
            'govTrackId' => 400195,
            'bio'        => "ISRAEL, Steve, a Representative from New York; born in Brooklyn, Kings County, N.Y., May 30, 1958; attended Nassau Community College, Garden City, N.Y., 1978; attended Syracuse University, Syracuse, N.Y., 1978-1979; B.A., George Washington University, Washington, D.C., 1982; staff, United States Representative Richard Ottinger of New York, 1980-1983; member of the town board, Huntington, N.Y., 1993-2001; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400199,
            'bio'        => "JACKSON LEE, Sheila, a Representative from Texas; born in Queens, Queens County, N.Y., January 12, 1950; graduated from Jamaica High School, Jamaica, N.Y.; B.A., Yale University, New Haven, Conn., 1972; J.D., University of Virginia Law School, Charlottesville, Va., 1975; lawyer, private practice; staff counsel, United States House Select Committee on Assassinations, 1977-1978; member of the Houston, Tex., city council, 1990-1994; Houston, Tex., municipal judge, 1987-1990; elected as a Democrat to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present). "
        ],
        [
            'govTrackId' => 400204,
            'bio'        => "JOHNSON, Eddie Bernice, a Representative from Texas; born in Waco, McLennan County, Tex., December 3, 1935; graduated from A.J. Moore High School, Waco, Tex., 1952; nursing certificate, St. Mary’s College at the University of Notre Dame, Notre Dame, Ind., 1955; B.S., Texas Christian University, Fort Worth, Tex., 1967; M.P.A., Southern Methodist University, Dallas, Tex., 1976; chief psychiatric nurse and psychotherapist, Veterans Administration hospital, Dallas, Tex.; member of the Texas state house of representatives, 1972-1977; administrator, United States Department of Health, Education and Welfare, 1977-1981; business owner; member of the Texas state senate, 1986-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present). "
        ],
        [
            'govTrackId' => 400211,
            'bio'        => "KAPTUR, Marcia Carolyn (Marcy), a Representative from Ohio; born in Toledo, Lucas County, Ohio, June 17, 1946; graduated from St. Ursula Academy, Toledo, Ohio, 1964; B.A., University of Wisconsin, Madison, Wis., 1968; M.A., University of Michigan, Ann Arbor, Mich., 1974; attended the University of Manchester, Manchester, England, 1974; post-graduate studies, Massachusetts Institute of Technology, Cambridge, Mass., 1981; urban planner, Toledo-Lucas County, Ohio, Plan Commissions, 1969-1975; director of planning, National Center for Urban Ethnic Affairs, 1975-1977; assistant director for urban affairs, domestic policy staff, Executive Office of the President, 1977-1979; elected as a Democrat to the Ninety-eighth and to the sixteen succeeding Congresses (January 3, 1983-present). "
        ],
        [
            'govTrackId' => 400218,
            'bio'        => "KIND, Ron, a Representative from Wisconsin; born in La Crosse, La Crosse County, Wis., March 16, 1963; B.A., Harvard University, Cambridge, Mass., 1985; M.A., London School of Economics, London, England, 1986; J.D., University of Minnesota School of Law, Minneapolis, Minn., 1990; lawyer, private practice; state prosecutor, La Crosse County, Wis., district attorney’s office, 1992-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400230,
            'bio'        => "LANGEVIN, James, a Representative from Rhode Island; born in Providence, Providence County, R.I., April 22, 1964; B.A., Rhode Island College, Providence, R.I., 1990; M.A., Harvard University, Cambridge, Mass., 1994; member of the Rhode Island state house of representatives, 1988-1994; Rhode Island secretary of state, 1994-2001; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400232,
            'bio'        => "LARSEN, Richard Ray (Rick), a Representative from Washington; born in Arlington, Snohomish County, Wash., June 15, 1965; B.A., Pacific Lutheran University, Tacoma, Wash., 1987; M.P.A., University of Minnesota, Minneapolis, Minn., 1990; member of the Snohomish, Wash., county council, 1998-2000; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400237,
            'bio'        => "LEE, Barbara, a Representative from California; born in El Paso, El Paso County, Tex., July 16, 1946; graduated from San Fernando High School, San Fernando, Calif., 1964; B.A., Mills College, Oakland, Calif., 1973; M.S.W., University of California, Berkeley, Calif., 1975; staff, United States Representative Ronald V. Dellums of California, 1975-1987; member of the California state assembly, 1991-1997; member of the California state senate, 1997-1998; elected as a Democrat to the One Hundred Fifth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Ron Dellums, and reelected to the nine succeeding Congresses (April 7, 1998-present). "
        ],
        [
            'govTrackId' => 400238,
            'bio'        => "LEVIN, Sander Martin, (brother of Carl Levin), a Representative from Michigan; born in Detroit, Wayne County, Mich., September 6, 1931; graduated from Central High School, Detroit, Mich.; B.A., University of Chicago, Chicago, Ill., 1952; M.A., Columbia University, New York, N.Y., 1954; LL.B., Harvard University, Cambridge, Mass., 1957; lawyer, private practice; member of the Michigan state senate, 1965-1970; unsuccessful candidate for Governor of Michigan, 1970 and 1974; assistant administrator, United States Agency for International Development, 1977-1981; delegate, Democratic National Conventions, 1964 and 1968; elected as a Democrat to the Ninety-eighth and to the sixteen succeeding Congresses (January 3, 1983-present); chair, Committee on Ways and Means (One Hundred Eleventh Congress). "
        ],
        [
            'govTrackId' => 400240,
            'bio'        => "LEWIS, John R., a Representative from Georgia; born in Troy, Pike County, Ala., February 21, 1940; attended Pike County Training School, Brundidge, Ala.; B.A., American Baptist Theological Seminary, Nashville, Tenn., 1961; B.A., Fisk University, Nashville, Tenn., 1967; chairman, Student Nonviolent Coordinating Committee, 1963-1966; director of ACTION, 1977-1980; community affairs director, National Consumer Co-op Bank, Atlanta, 1980-1986; member of the Atlanta, Ga., city council, 1982-1986; elected as a Democrat to the One Hundredth and to the fourteen succeeding Congresses (January 3, 1987-present). "
        ],
        [
            'govTrackId' => 400245,
            'bio'        => "LOFGREN, Zoe, a Representative from California; born in San Mateo, San Mateo County, Calif., December 21, 1947; B.A., Stanford University, Stanford, Calif., 1970; J.D., Santa Clara University School of Law, Santa Clara, Calif., 1975; lawyer, private practice; faculty, Santa Clara University School of Law, Santa Clara, Calif., 1978-1980; staff, United States Representative William Donlon (Don) Edwards of California, 1970-1978; executive director, Community Housing Developers; elected as a Democrat to the One Hundred Fourth and to the ten succeeding Congresses (January 3, 1995-present); one of the managers appointed by the House of Representatives in 2009 to conduct the impeachment proceedings of Samuel B. Kent, judge of the United States District Court for the Southern District of Texas; chair, Committee on Standards of Official Conduct (One Hundred Eleventh Congress). "
        ],
        [
            'govTrackId' => 400246,
            'bio'        => "LOWEY, Nita M., a Representative from New York; born Nita Sue Melnikoff in New York, N.Y., July 5, 1937; graduated from Bronx High School of Science, Bronx, N.Y., 1955; B.S., Mount Holyoke College, South Hadley, Mass., 1959; staff, New York secretary of state for economic development and neighborhood preservation; deputy director, New York state division of economic opportunity, 1975-1985; New York state assistant secretary of state, 1985-1987; elected as a Democrat to the One Hundred First and to the thirteen succeeding Congresses (January 3, 1989-present). "
        ],
        [
            'govTrackId' => 400249,
            'bio'        => "LYNCH, Stephen F., a Representative from Massachusetts; born in Boston, Suffolk County, Mass., March 31, 1955; graduated from South Boston High School, Boston, Mass., 1973; B.S., Wentworth Institute, Boston, Mass., 1988; J.D., Boston College, Chestnut Hill, Mass., 1991; M.A., Harvard University, Cambridge, Mass., 1998; member of the Massachusetts state house of representatives, 1995-1996; member of the Massachusetts state senate, 1997-2001; elected as a Democrat to the One Hundred Seventh Congress, by special election, to fill the vacancy caused by the death of United States Representative Joseph Moakley, and reelected to the seven succeeding Congresses (October 16, 2001-present). "
        ],
        [
            'govTrackId' => 400251,
            'bio'        => "MALONEY, Carolyn Bosher, a Representative from New York; born in Greensboro, Guilford County, N.C., February 19, 1946; B.A., Greensboro College, Greensboro, N.C., 1968; community affairs coordinator, New York, N.Y., board of education welfare education program, 1972-1975; staff, New York, N.Y., board of education center for career and occupational education, 1975-1976; staff, New York state assembly committee on housing, 1977; senior program analyst, New York state assembly committee on cities, 1977-1979; executive director, advisory council, office of the New York state senate minority leader, 1979-1982; director of special projects, office of the New York state senate minority leader, 1980-1982; member of the New York, N.Y., city council, 1982-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Joint Economic Committee (One Hundred Eleventh Congress). "
        ],
        [
            'govTrackId' => 400253,
            'bio'        => "MARKEY, Edward John, a Senator and a Representative from Massachusetts; born in Malden, Middlesex County, Mass., July 11, 1946; attended Immaculate Conception Grammar School, Malden, Mass.; graduated from Malden Catholic High School, Malden, Mass., 1964; B.A., Boston College, Chestnut Hill, Mass., 1968; J.D., Boston College Law School, Chestnut Hill, Mass., 1972; lawyer, private practice; United States Army Reserve, 1968-1973; member of the Massachusetts state house of representatives, 1973-1976; elected as a Democrat to the Ninety-fourth Congress, by special election to fill the vacancy caused by the death of United States Representative Torbert H. Macdonald; reelected to the nineteen succeeding Congresses, and served from November 2, 1976, to July 15, 2013, when he resigned to become a U.S. senator; elected as a Democrat to the U.S. Senate in a special election on June 25, 2013, to fill the vacancy caused by the resignation of John F. Kerry, a seat subsequently held by appointed senator William Cowan, and took the oath of office on July 16, 2013; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 400259,
            'bio'        => "McCOLLUM, Betty, a Representative from Minnesota; born in Minneapolis, Hennepin County, Minn., July 12, 1954; graduated from South St. Paul High School, St. Paul, Minn., 1972; graduated from University of St. Catherine, St. Paul, Minn.; member of the Minnesota state house of representatives, 1992-2001; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present). "
        ],
        [
            'govTrackId' => 400262,
            'bio'        => "McDERMOTT, James A., a Representative from Washington; born in Chicago, Cook County, Ill., December 28, 1936; B.S., Wheaton College, Wheaton, Ill., 1958; M.D., University of Illinois Medical School, Chicago, Ill., 1963; residence in adult psychiatry, University of Illinois hospitals, 1964-1966; residency in child psychiatry, University of Washington hospitals, Seattle, Wash., 1966-1968; United States Navy Medical Corps, 1968-1970; psychiatrist; faculty member, University of Washington, Seattle, Wash., 1970-1983; member of the Washington state house of representatives, 1971-1972; unsuccessful candidate for nomination as governor of Washington in 1972; member of the Washington state senate, 1975-1987; unsuccessful candidate for election as governor of Washington in 1980; unsuccessful candidate for nomination as governor of Washington in 1984; medical officer, United States Foreign Service, 1987-1988; elected as a Democrat to the One Hundred First and to the thirteen succeeding Congresses (January 3, 1989-present); chair, Committee on Standards of Official Conduct (One Hundred Third Congress). "
        ],
        [
            'govTrackId' => 400263,
            'bio'        => "McGOVERN, James P., a Representative from Massachusetts; born in Worcester, Worcester County, Mass., November 20, 1959; graduated from Worcester Academy, Worcester, Mass.; B.A., American University, Washington, D.C., 1981; M.P.A., American University, Washington, D.C., 1984; presidential campaign staff, United States Senator George McGovern of South Dakota, 1984; staff, United States Representative Joseph Moakley of Massachusetts, 1982-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400271,
            'bio'        => "MEEKS, Gregory W., a Representative from New York; born in East Harlem, New York County, N.Y., September 25, 1953; graduated from Julia Richman High School, New York, N.Y., 1971; B.A., Adelphi University, Garden City, N.Y., 1975; J.D., Howard University, Washington, D.C., 1978; lawyer; Queens County, N.Y. assistant district attorney, 1978-1983; assistant special narcotics prosecutor, New York, N.Y.; deputy counsel, New York state investigation commission, 1984-1985; supervising judge, New York state workers compensation board, 1985-1992; member of the New York state assembly, 1992-1998; elected as a Democrat to the One Hundred Fifth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Floyd H. Flake, and to the One Hundred Sixth and to the eight succeeding Congresses (February 3, 1998-present). "
        ],
        [
            'govTrackId' => 400289,
            'bio'        => "NADLER, Jerrold Lewis, a Representative from New York; born in Brooklyn, Kings County, New York, June 13, 1947; graduated from Stuyvesant High School, New York, N.Y., 1965; B.A., Columbia University, New York, N.Y., 1969; J.D., Fordham University, New York, N.Y., 1978; legislative assistant, New York state assembly, 1972; member of the New York state assembly, 1977-1992; elected as a Democrat to the One Hundred Second Congress, by special election, to fill the vacancy caused by the death of United States Representative Theodore S. Weiss, and to the twelve succeeding Congresses (November 3, 1992-present). "
        ],
        [
            'govTrackId' => 400290,
            'bio'        => "NAPOLITANO, Grace Flores, a Representative from California; born in Brownsville, Cameron County, Tex., December 4, 1936; graduated from Brownsville High School, Brownsville, Tex., 1954; attended Cerritos College, Norwalk, Calif.; attended Texas Southmost College, Brownsville, Tex.; member of the Norwalk, Calif., city council, 1986; Mayor of Norwalk, Calif., 1989-1990; member of the California state assembly, 1992-1998; elected as a Democrat to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present). "
        ],
        [
            'govTrackId' => 400291,
            'bio'        => "NEAL, Richard Edmund, a Representative from Massachusetts; born in Springfield, Hampden County, Mass., February 14, 1949; graduated from Springfield Technical High School, Springfield, Mass., 1968; B.A., American International College, Springfield, Mass., 1972; M.B.A., University of Hartford, West Hartford, Conn., 1976; staff, Mayor William C. Sullivan, Springfield, Mass., 1973-1978; member of the Springfield, Mass., city council, 1978-1984; Mayor of Springfield, Mass., 1984-1988; elected as a Democrat to the One Hundred First and to the thirteen succeeding Congresses (January 3, 1989-present). "
        ],
        [
            'govTrackId' => 400295,
            'bio'        => "NORTON, Eleanor Holmes, a Delegate from the District of Columbia; born in Washington, D.C., June 13, 1937; graduated from Dunbar High School, Washington, D.C.; B.A., Antioch College of Antioch University, Yellow Springs, Ohio, 1960; M.A., Yale University, New Haven, Conn., 1963; LL.B., Yale University Law School, New Haven, Conn., 1964; lawyer, private practice; law clerk to Federal District Court Judge A. Leon Higginbotham, 3rd Circuit, 1964-1965; assistant legal director, American Civil Liberties Union, 1965-1970; adjunct assistant professor, New York University Law School, 1970-1971; staff, New York, N.Y. Mayor John Lindsay, 1971-1974; chair, New York City commission on human rights, 1970-1977; chair, United States Equal Employment Opportunity Commission, 1977-1981; senior fellow, Urban Institute, 1981-1982; professor, Georgetown University Law Center, 1982-1990; elected as a Democrat to the One Hundred Second and to the twelve succeeding Congresses (January 3, 1991-present). "
        ],
        [
            'govTrackId' => 400308,
            'bio'        => "PALLONE, Frank, Jr., a Representative from New Jersey; born in Long Branch, Monmouth County, N.J., October 30, 1951; graduated from Long Branch High School, Long Branch, N.J., 1969; B.A., Middlebury College, Middlebury, Vt., 1973; M.A., Fletcher School of Law and Diplomacy, Tufts University, Medford, Mass., 1974; J.D., Rutgers University School of Law, Camden, N.J., 1978; lawyer, private practice; member of the Long Branch, N.J., city council, 1982-1988; member of the New Jersey state senate, 1983-1988; elected as a Democrat to the One Hundredth Congress, by special election, to fill the vacancy caused by the death of United States Representative James J. Howard, but was not sworn in because Congress had adjourned; elected simultaneously to the One Hundred First Congress and reelected to the thirteen succeeding Congresses (November 8, 1988-present); unsuccessful candidate for nomination for the United States Senate in 2013. "
        ],
        [
            'govTrackId' => 400309,
            'bio'        => "PASCRELL, William J., Jr., a Representative from New Jersey; born in Paterson, Passaic County, N.J., January 25, 1937; graduated from St. John the Baptist High School, Paterson, N.J., 1955; B.A., Fordham University, New York, N.Y., 1959; M.A., Fordham University, New York, N.Y., 1961; United States Army, 1961-1962; United States Army Reserve, 1962-1967; teacher; president of the Paterson, N.J., board of education, 1979-1982; member of the New Jersey state general assembly, 1988-1996; elected minority leader pro tempore; mayor of Paterson, N.J., 1990-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400314,
            'bio'        => "PELOSI, Nancy, (daughter of Thomas D'Alesandro, Jr.), a Representative from California; born Nancy D’Alesandro in Baltimore, Md., March 26, 1940; A.B., Trinity College, 1962; chair, California State Democratic Party, 1981-1983; finance chairman, Democratic Senatorial Campaign Committee, 1985-1986; elected as a Democrat to the One Hundredth Congress, by special election, to fill the vacancy caused by the death of United States Representative Sala Burton of California, and reelected to the fourteen succeeding Congresses (June 2, 1987-present); minority whip (One Hundred Seventh Congress); minority leader (One Hundred Eighth, One Hundred Ninth, and One Hundred Twelfth through One Hundred Fourteenth Congresses); Speaker of the House (One Hundred Tenth and One Hundred Eleventh Congresses). "
        ],
        [
            'govTrackId' => 400316,
            'bio'        => "PETERSON, Collin Clark, a Representative from Minnesota; born in Fargo, Cass County, N.D., June 29, 1944; B.A., Moorhead State University, Moorhead, Minn., 1966; United States Army National Guard, 1963-1969; certified public accountant; member of the Minnesota state senate, 1977-1986; unsuccessful candidate for election to the Ninety-ninth Congress in 1984 and to the One Hundredth Congress in 1986; unsuccessful candidate for nomination to the United States House of Representatives in 1988; elected as a Democrat to the One Hundred Second and to the twelve succeeding Congresses (January 3, 1991-present); chair, Committee on Agriculture (One Hundred Tenth and One Hundred Eleventh Congresses). "
        ],
        [
            'govTrackId' => 400326,
            'bio'        => "PRICE, David Eugene, a Representative from North Carolina; born in Erwin, Unicoi County, Tenn., August 17, 1940; graduated from Unicoi County High School, Erwin, Tenn., 1957; attended Mars Hill College, Mars Hill, N.C., 1957-1959; B.A., University of North Carolina, Chapel Hill, N.C., 1961; B.D., Yale University, New Haven, Conn., 1964; Ph.D., Yale University, New Haven, Conn., 1969; faculty, Yale University, New Haven, Conn., 1967-1973; staff, United States Senator Edward Lewis Bartlett of Alaska, 1963-1967; professor, Duke University, Durham, N.C., 1973-1986 and 1995-1996; staff director, commission on presidential nomination, Democratic National Committee, 1981-1982; chair, North Carolina Democratic Party, 1983-1984; elected as a Democrat to the One Hundredth and to the three succeeding Congresses (January 3, 1987-January 3, 1995); unsuccessful candidate for reelection to the One Hundred Fourth Congress in 1994; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present). "
        ],
        [
            'govTrackId' => 400333,
            'bio'        => "RANGEL, Charles B., a Representative from New York; born in New York, N.Y., June 11, 1930; attended DeWitt Clinton High School; B.S., New York University School of Commerce, New York, N.Y., 1957; LL.B. (J.D.), St. John’s Law School, Brooklyn, N.Y., 1960; United States Army, 1948-1952; lawyer, private practice; assistant United States Attorney, Southern District of New York, 1963; counsel to speaker of the New York state assembly, 1965; counsel to the President’s Commission to Revise the Draft Laws, 1966; secretary, New York State Penal Law and Code Revision Commission; member of the New York state assembly, 1966-1970; elected as a Democrat to the Ninety-second and to the twenty-two succeeding Congresses (January 3, 1971-present); chair, Select Committee on Narcotics Abuse and Control (Ninety-eighth through One Hundred Third Congresses); chair, Committee on Ways and Means (One Hundred Tenth and One Hundred Eleventh Congresses); chair, Joint Committee on Taxation (One Hundred Eleventh Congress). "
        ],
        [
            'govTrackId' => 400347,
            'bio'        => "ROYBAL-ALLARD, Lucille, (daughter of Edward R. Roybal), a Representative from California; born in Boyle Heights, Los Angeles County, Calif., June 12, 1941; graduated from Ramona Convent Secondary School, Alhambra, Calif., 1959; B.A., California State University, Los Angeles, Calif., 1965; community relations and nonprofit executive; member of the California state assembly, 1987-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present)."
        ],
        [
            'govTrackId' => 400349,
            'bio'        => "RUPPERSBERGER, C. A. (Dutch), a Representative from Maryland; born in Baltimore, Md., on January 31, 1946; graduated Baltimore City College, Baltimore, Md., 1963; attended, University of Maryland, College Park, Md.; J.D., University of Baltimore School of Law, Baltimore, Md., 1970; lawyer, private practice; assistant Maryland state’s attorney, 1972-1980; member of the Baltimore, Md., county council, 1985-1994; delegate, Democrat National Convention, 1996 and 2000; Baltimore, Md., county executive, 1994-2002; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400350,
            'bio'        => "RUSH, Bobby L., a Representative from Illinois; born in Albany, Dougherty County, Ga., November 23, 1946; attended Marshall High School, Marshall, Ill.; B.A., Roosevelt University, Chicago, Ill., 1974; M.A., University of Illinois, Chicago, Ill., 1994; M.A., McCormick Theological Seminary, Chicago, Ill., 1998; United States Army, 1963-1968; insurance agent; alderman, Chicago, Ill., city council, 1983-1993; deputy chairman, Illinois Democratic Party, 1990; unsuccessful candidate for mayor of Chicago, Ill., 1999; minister; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present)."
        ],
        [
            'govTrackId' => 400352,
            'bio'        => "RYAN, Timothy J., a Representative from Ohio; born in Niles, Trumbull County, Ohio, July 16, 1973; graduated from John F. Kennedy High School, Warren, Ohio, 1991; B.S., Bowling Green State University, Bowling Green, Ohio, 1995; J.D., Franklin Pierce Law Center, Rindge, N.H., 2000; staff, United States Representative James A. Traficant of Ohio; member of the Ohio state senate, 2000-2002; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400355,
            'bio'        => "SÁNCHEZ, Linda T., (sister of Loretta Sanchez), a Representative from California; born in Orange, Orange County, Calif., January 28, 1969; B.A., University of California, Berkeley, Calif., 1991; J.D., University of California, Los Angeles, Calif., 1995; lawyer, private practice; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400356,
            'bio'        => "SANCHEZ, Loretta, (sister of Linda T. Sánchez), a Representative from California; born in Lynwood, Los Angeles County, Calif., January 7, 1960; graduated from Katella High School, Anaheim, Calif.; B.A., Chapman University, Orange, Calif., 1982; M.B.A., American University, Washington, D.C., 1984; financial analyst; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400360,
            'bio'        => "SCHAKOWSKY, Janice D., a Representative from Illinois; born in Chicago, Cook County, Illinois, May 26, 1944; attended Sullivan High School, Chicago, Ill.; B.S., University of Illinois, Urbana-Champaign, Ill., 1965; director, Illinois State Council of Senior Citizens, 1985-1990; member of the Illinois state house of representatives, 1990-1998; elected as a Democrat to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present)."
        ],
        [
            'govTrackId' => 400361,
            'bio'        => "SCHIFF, Adam, a Representative from California; born in Framingham, Norfolk County, Mass., June 22, 1960; B.A., Stanford University, Stanford, Calif., 1982; J.D., Harvard University, Cambridge, Mass., 1985; member of the California state senate, 1996-2001; elected as a Democrat to the One Hundred Seventh and to the seven succeeding Congresses (January 3, 2001-present); one of the managers appointed by the House of Representatives in 2009 to conduct the impeachment proceedings of Samuel B. Kent, judge of the United States District Court for the Southern District of Texas."
        ],
        [
            'govTrackId' => 400363,
            'bio'        => "SCOTT, David, a Representative from Georgia; born in Aynor, Horry County, S.C., June 27, 1945; graduated from Campbell High School, Daytona Beach, Fla., 1963; B.A., Florida Agricultural and Mechanical University, Tallahassee, Fla., 1967; M.B.A., Wharton School of Finance, University of Pennsylvania, Philadelphia, Pa., 1969; business owner; member of the Georgia state house of representatives, 1974-1982; member of the Georgia state senate, 1982-2002; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400364,
            'bio'        => "SCOTT, Robert C., a Representative from Virginia; born in Washington, D.C., April 30, 1947; graduated from Groton School, Groton, Mass.; A.B., Harvard University, Cambridge, Mass., 1969; J.D., Boston College School of Law, Boston, Mass., 1973; lawyer, private practice; United States Army Reserve, 1970-1974; Massachusetts Army National Guard, 1974-1976; member of the Virginia state house of delegates, 1978-1983; member of the Virginia state senate, 1983-1993; unsuccessful candidate for election to the United States House of Representatives in 1986; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present)."
        ],
        [
            'govTrackId' => 400366,
            'bio'        => "SERRANO, José E., a Representative from New York; born in Mayaguez, P.R., October 24, 1943; graduated from Dodge Vocational High School, N.Y., 1961; attended Lehman College, N.Y., City University of New York, 1961; United States Army, 1964-1966; banker; member of the New York, N.Y., board of education, 1969-1974; chair, South Bronx Community Corporation; delegate, Democratic National Convention, 1976; member of the New York state assembly, 1975-1990; elected as a Democrat to the One Hundred First Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Robert Garcia, and to the thirteen succeeding Congresses (March 20, 1990-present)."
        ],
        [
            'govTrackId' => 400371,
            'bio'        => "SHERMAN, Brad, a Representative from California; born in Los Angeles, Los Angeles County, Calif., October 24, 1954; B.A., University of California, Los Angeles, Calif., 1974; J.D., Harvard University, Cambridge, Mass., 1979; lawyer, private practice; certified public accountant; member of the California state board of equalization, 1990-1995; chair, California state board of equalization, 1991-1995; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400378,
            'bio'        => "SLAUGHTER, Louise McIntosh, a Representative from New York; born Louise McIntosh in Harlan County, Ky., August 14, 1929; B.S., University of Kentucky, Lexington, Ky., 1951; M.S., University of Kentucky, Lexington, Ky., 1953; elected to the Monroe County, N.Y., legislature, 1976-1979; regional coordinator for New York department of state, 1976-1979; coordinator, regional office of New York lieutenant governor, 1979-1982; member of the New York state assembly, 1982-1986; elected as a Democrat to the One Hundredth and to the fourteen succeeding Congresses (January 3, 1987-present); chair, Committee on Rules (One Hundred Tenth and One Hundred Eleventh Congresses)."
        ],
        [
            'govTrackId' => 400379,
            'bio'        => "SMITH, Adam, a Representative from Washington; born in Washington, D.C., June 15, 1965; graduated from Tyee High School, Seattle, Wash. 1983; B.A., Fordham University, New York, N.Y., 1987; J.D., University of Washington School of Law, Seattle, Wash., 1990; lawyer, private practice; city prosecutor, Seattle, Wash., 1993-1995; member of the Washington state senate, 1991-1996; elected as a Democrat to the One Hundred Fifth and to the nine succeeding Congresses (January 3, 1997-present)."
        ],
        [
            'govTrackId' => 400402,
            'bio'        => "THOMPSON, Bennie, a Representative from Mississippi; born in Bolton, Hinds County, Miss., January 28, 1948; B.A., Tougaloo College, Tougaloo, Miss., 1968; M.S., Jackson State University, Jackson, Miss., 1972; teacher; member of the Bolton, Miss., board of aldermen, 1969-1973; Mayor of Bolton, Miss., 1973-1979; member of the Hinds County, Miss., board of supervisors, 1980-1993; elected as a Democrat to the One Hundred Third Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Mike Espy, and reelected to the eleven succeeding Congresses (April 13, 1993-present); chair, Committee on Homeland Security (One Hundred Tenth and One Hundred Eleventh Congresses)."
        ],
        [
            'govTrackId' => 400403,
            'bio'        => "THOMPSON, Michael, a Representative from California; born in St. Helena, Napa County, Calif., January 24, 1951; graduated from St. Helena High School, St. Helena, Calif.; B.A., California State University, Chico, Calif., 1982; M.A., California State University, Chico, Calif., 1996; United States Army, 1969-1972; California state assembly fellow, 1982-1983; member of the California state senate, 1990-1998; elected as a Democrat to the One Hundred Sixth and to the eight succeeding Congresses (January 3, 1999-present)."
        ],
        [
            'govTrackId' => 400413,
            'bio'        => "UDALL, Thomas (Tom), (son of Stewart Lee Udall; nephew of Morris K. Udall; cousin of Mark Udall; cousin of Gordon H. Smith), a Senator and a Representative from New Mexico; born in Tucson, Pima County, Ariz., May 18, 1948; graduated from Prescott College, Prescott, Ariz., 1970; Bachelor of Law, Cambridge University, England, 1975; J.D., University of New Mexico School of Law, Albuquerque, N.M., 1977; appointed Assistant United States Attorney for the District of New Mexico, criminal division 1978-1981; served as Chief Counsel to the New Mexico Department of Health and Environment; Attorney General, State of New Mexico, 1990-1998; elected as a Democrat to the One Hundred Sixth and to the four succeeding Congresses (January 3, 1999-January 3, 2009); not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2008; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 400415,
            'bio'        => "VAN HOLLEN, Christopher, a Representative from Maryland; born in Karachi, Pakistan, January 10, 1959; B.A., Swarthmore College, Swarthmore, Pa., 1982; M.P.P., Harvard University, Cambridge, Mass., 1985; J.D., Georgetown University, Washington, D.C., 1990; lawyer, private practice; member of the Maryland state house of representatives, 1990-1994; member of the Maryland state senate, 1994-2002; elected as a Democrat to the One Hundred Eighth and to the six succeeding Congresses (January 3, 2003-present)."
        ],
        [
            'govTrackId' => 400416,
            'bio'        => "VELÁZQUEZ, Nydia M., a Representative from New York; born in Yabucoa, P.R., March 28, 1953; B.A., University of Puerto Rico, Rio Piedras, 1974; M.A., New York University, New York, N.Y., 1976; faculty, University of Puerto Rico, Humacao, P.R., 1976-1981; adjunct professor, Hunter College, City University of New York, N.Y., 1981-1983; staff, United States Representative Edolphus Towns of New York, 1983; member of the New York, N.Y., city council, 1984; national director, Migration Division Office, Puerto Rico Department of Labor and Human Resources, 1986-1989; director, Department of Puerto Rican Community Affairs in the United States for the Commonwealth of Puerto Rico, 1989-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Committee on Small Business (One Hundred Tenth and One Hundred Eleventh Congresses)."
        ],
        [
            'govTrackId' => 400417,
            'bio'        => "VISCLOSKY, Peter, a Representative from Indiana; born in Gary, Lake County, Ind., August 13, 1949; graduated from Andrean High School, Merrillville, Ind.; B.S., Indiana University Northwest, Gary, Ind., 1970; J.D., University of Notre Dame School of Law, Notre Dame, Ind., 1973; LL.M., Georgetown University Law Center, Washington, D.C., 1982; lawyer, private practice; staff, United States House of Representatives Committee on Appropriations, 1977-1980; staff, United States House of Representatives Committee on the Budget, 1980-1982; elected as a Democrat to the Ninety-ninth and to the fifteen succeeding Congresses (January 3, 1985-present)."
        ],
        [
            'govTrackId' => 400422,
            'bio'        => "WATERS, Maxine, a Representative from California; born Maxine (Moore) Carr, in St. Louis, St. Louis County, Mo., August 15, 1938; B.A., California State University, Los Angeles, Calif., 1970; teacher; Head Start volunteer coordinator; delegate, Democratic National Conventions, 1972-1988; member of the California state assembly, 1977-1991; elected as a Democrat to the One Hundred Second and to the twelve succeeding Congresses (January 3, 1991-present)."
        ],
        [
            'govTrackId' => 400616,
            'bio'        => "BUTTERFIELD, George Kenneth, Jr. (G.K.), a Representative from North Carolina; born in Wilson, Wilson County, N.C., April 27, 1947; graduated from Charles H. Darden High School, Wilson, N.C.; B.A., North Carolina Central University, Durham, N.C., 1971; J.D., North Carolina Central University School of Law, 1974; United States Army, 1968-1970; lawyer, private practice; North Carolina resident superior court judge, 1989-2001; North Carolina special superior court judge, 2002-2004; Justice of the North Carolina state supreme court, 2001-2002; elected as a Democrat to the One Hundred Eighth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Frank Ballance, and reelected to the six succeeding Congresses (July 20, 2004-present). "
        ],
        [
            'govTrackId' => 400618,
            'bio'        => "COSTA, Jim, a Representative from California; born in Fresno, Fresno County, Calif., April 13, 1952; B.A., California State University, Fresno, Calif., 1974; member of the California state assembly, 1978-1994; member of the California state senate, 1994-2002; professional advocate; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400623,
            'bio'        => "Debbie Wasserman Schultz (born September 27, 1966) is an American politician. She is the U.S. Representative for Florida's 23rd congressional district, a member of the Democratic Party and the Chair of the Democratic National Committee. She previously served in the Florida House of Representatives and the Florida Senate. She is the first Jewish congresswoman elected from Florida. The district covers parts of Broward and Miami-Dade Counties, including the densely populated coastal cities of Fort Lauderdale and Miami Beach."
        ],
        [
            'govTrackId' => 400630,
            'bio'        => "LIPINSKI, Daniel, (son of William Oliver Lipinski), a Representative from Illinois; born in Chicago, Cook County, Ill., July 15, 1966; B.S., Northwestern University, Evanston, Ill., 1988; M.S., Stanford University, Stanford, Calif., 1989; Ph.D., Duke University, Durham, N.C., 1998; professor, James Madison University Washington Program, Washington, D.C., 2000; professor, University of Notre Dame, South Bend, Ind., 2000-2001; professor, University of Tennessee, Knoxville, Tenn., 2001-2004; staff, United States Representative George Sangmeister of Illinois, 1993-1994; staff, United States Representative Jerry Costello of Illinois, 1995-1996; staff, United States Representative Rod Blagojevich of Illinois, 1999-2000; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400639,
            'bio'        => "CLEAVER, Emanuel, II, a Representative from Missouri; born in Waxahachie, Ellis County, Tex., October 26, 1944; graduated from Booker T. Washington High School, Wichita Falls, Tex., 1963; B.S., Prairie View A&M University, Prairie View, Tex., 1972; M.Div., St. Paul School of Theology, Kansas City, Mo., 1974; pastor; radio show host; member of the Kansas City, Mo. city council, 1979-1991; Mayor of Kansas City, Mo., 1991-1999; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400641,
            'bio'        => "HIGGINS, Brian, a Representative from New York; born in Buffalo, Erie County, N.Y., October 6, 1959; B.A., Buffalo State College, Buffalo, N.Y., 1984; M.A., Buffalo State College, Buffalo, N.Y., 1985; M.P.A., Harvard University, Cambridge, Mass., 1996; lecturer, Buffalo State College, Buffalo, N.Y.; member of the Buffalo, N.Y. common council, 1988-1994; member of the New York state assembly, 1999-2004; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400653,
            'bio'        => "Green was born in New Orleans, Louisiana. He attended Florida A&M University and transferred to Tuskegee University. He later went on to receive his Juris Doctor in 1974 from the Thurgood Marshall School of Law at Texas Southern University. After receiving his law degree and being admitted to the Texas Bar, he remained in Houston and currently lives in the Alief community. In 1978, Green was elected Justice of the Peace in Harris County, Texas, in the Precinct 7, Place Two position. He held this position for 26 years. A former trial lawyer, Green co-founded the firm of Green, Wilson, Dewberry, and Fitch. He also served as president of the Houston NAACP and, during his term as the organization's leader, membership increased sevenfold. While serving as NAACP leader, he focused on increasing minority hiring in Texas and forming alliances with Hispanic groups."
        ],
        [
            'govTrackId' => 400657,
            'bio'        => "CUELLAR, Henry, a Representative from Texas; born in Laredo, Webb County, Tex., September 19, 1955; graduated from J. W. Nixon High School, Laredo, Tex., 1974; A.A., Laredo Community College, Laredo, Tex., 1976; B.S., Georgetown University, Washington, D.C., 1978; J.D., University of Texas, Austin, Tex., 1981; M.A., Texas A&M International University, Laredo, Tex., 1982; Ph.D., University of Texas, Austin, Tex., 1998; lawyer, private practice; member of the Texas state house of representatives, 1987-2001; unsuccessful candidate for nomination to the United States of Representatives in 2002; Texas secretary of state, 2001; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congress (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400661,
            'bio'        => "MOORE, Gwendolynne S. (Gwen), a Representative from Wisconsin; born in Racine, Racine County, Wis., April 18, 1951; graduated from Northern Division High School, Milwaukee, Wis., 1969; B.A., Marquette University, Milwaukee, Wis., 1978; housing officer, Wisconsin Housing and Development Authority; member of the Wisconsin state assembly, 1989-1992; member of the Wisconsin state senate, 1993-2004, president pro tempore, 1997-1998; elected as a Democrat to the One Hundred Ninth and to the five succeeding Congresses (January 3, 2005-present). "
        ],
        [
            'govTrackId' => 400663,
            'bio'        => "MATSUI, Doris, (wife of Robert Matsui), a Representative from California; born in Poston, La Paz County, Arizona, September 25, 1944; B.A., University of California, Berkeley, Calif.; staff, President William Jefferson Clinton administration, 1993-1998; elected as a Democrat to the One Hundred Ninth Congress, by special election, to fill the vacancy caused by the death of her husband, United States Representative Robert Matsui, and reelected to the five succeeding Congresses (March 8, 2005-present). "
        ],
        [
            'govTrackId' => 408211,
            'bio'        => "NOLAN, Richard Michael, a Representative from Minnesota; born in Brainerd, Crow Wing County, Minn., December 17, 1943; graduated from Brainerd High School, 1962; attended St. John’s University, Collegeville, Minn., 1962; B.A., University of Minnesota, 1966; postgraduate work in public administration and policy formation, University of Maryland, College Park, Md., 1966; postgraduate work in education, St. Cloud State College, St. Cloud, Minn.; pursued a career in business and education; teacher of social studies in Royalton, Minn., schools, 1968-1972; member of the Minnesota state house of representatives, 1969-1973; elected as a Democrat to the Ninety-fourth and to the two succeeding Congresses (January 3, 1975-January 3, 1981); was not a candidate for reelection to the Ninety-seventh Congress in 1980; president, U.S. Export Corporation, 1981-1986; president, Minnesota World Trade Center, St. Paul, Minn., 1987-1994; business executive and owner; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412186,
            'bio'        => "SIRES, Albio, a Representative from New Jersey; born in Bejucal, Cuba, January 26, 1951; graduated from Memorial High School, West New York, N.J.; B.A., St. Peter’s College, Jersey City, N.J., 1974; M.A., Middlebury College, Middlebury, Vt., 1985; businessman; teacher; unsuccessful candidate for election to the One Hundredth Congress in 1986; mayor, West New York, N.J., 1995- 2007; New Jersey state general assembly, 2000-2006; speaker, New Jersey state general assembly, 2002-2006; elected as a Democrat to the One Hundred Ninth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Robert Menendez, and reelected to the five succeeding Congresses (November 7, 2006-present)."
        ],
        [
            'govTrackId' => 412189,
            'bio'        => "McNERNEY, Jerry, a Representative from California; born in Albuquerque, Bernalillo County, N.Mex., June 18, 1951; attended the United States Military Academy, West Point, N.Y., 1969-1971; B.S., University of New Mexico, Albuquerque, N.Mex., 1973; M.S., University of New Mexico, Albuquerque, N.Mex., 1975; Ph.D., University of New Mexico, Albuquerque, N.Mex., 1981; engineer; business owner; unsuccessful candidate for election to the United States House of Representatives in 2004; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412192,
            'bio'        => "PERLMUTTER, Ed, a Representative from Colorado; born in Denver, Jefferson County, Colo., May 1, 1953; graduated from Jefferson High School, Edgewater, Colo., 1971; B.A., University of Colorado, Boulder, Colo., 1975; J.D., University of Colorado, Boulder, Colo., 1978; lawyer, private practice; member of the Colorado state senate, 1995-2003, president pro tempore, 2001-2003; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). PETERS, Scott, a Representative from California; born in Springfield, Clark County, Ohio, June 17, 1958; B.A., Duke University, Durham, N.C., 1980; J.D., New York University, New York, N.Y., 1984; lawyer, private practice; economist, United States Environmental Protection Agency, 1980-1981; deputy attorney, city of San Diego, Calif., 1991-1996; member of the San Diego, Calif., city council, 2000-2008; president of the San Diego, Calif., city council, 2006-2008; commissioner, San Diego unified port district, 2009-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412193,
            'bio'        => "COURTNEY, Joe, a Representative from Connecticut; born in West Hartford, Tolland County, Conn., April 6, 1953; B.A., Tufts University, Medford, Mass, 1975; J.D., University of Connecticut, Storrs, Conn., 1978; lawyer, private practice; member of the Connecticut state house of representatives, 1987-1994; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412195,
            'bio'        => "CASTOR, Kathy, a Representative from Florida; born in Miami, Miami-Dade County, Fla., August 20, 1966; B.A., Emory University, Atlanta, Ga., 1988; J.D., Florida State University, Tallahassee, Fla., 1991; lawyer, private practice; member of the Hillsborough County (Fla.) board of commissioners, 2002 to 2006; unsuccessful candidate for election to the Florida state senate in 2000; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412199,
            'bio'        => "JOHNSON, Hank, a Representative from Georgia; born in Washington, D.C., October 2, 1954; B.A., Clark College (Clark Atlanta University), Atlanta, Ga., 1976; J.D., Thurgood Marshall School of Law, Texas Southern University, Houston, Tex., 1979; lawyer, private practice; DeKalb County, Ga., board of commissioners, 2001-2006; associate judge, DeKalb County, Ga., magistrate court, 1989-2001; one of the managers appointed by the House of Representatives in 2009 to conduct the impeachment proceedings of Samuel B. Kent, judge of the United States District Court for the Southern District of Texas; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412209,
            'bio'        => "LOEBSACK, Dave, a Representative from Iowa; born in Sioux City, Woodbury County, Iowa, December 23, 1952; graduated from East High School, Sioux City, Iowa, 1970; B.S., Iowa State University, Ames, Iowa, 1974; M.A., Iowa State University, Ames, Iowa, 1976; Ph.D., University of California, Davis, Calif., 1985; professor; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412211,
            'bio'        => "YARMUTH, John, a Representative from Kentucky; born in Louisville, Jefferson County, Ky., November 4, 1947; graduated from J. M. Atherton High School, Louisville, Ky., 1965; B.A., Yale University, New Haven, Conn., 1969; attended Georgetown University Law School, Washington, D.C., 1971-1972; staff, United States Senator Marlow Cook of Kentucky, 1971-1975; writer; publisher; television journalist; associate vice president, University of Louisville; health care executive; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412212,
            'bio'        => "SARBANES, John, (son of Senator Paul Sarbanes), a Representative from Maryland; born in Baltimore, Md., May 22, 1962; graduated from Gilman School, Baltimore, Md., 1980; A.B., Princeton University, Princeton, N.J., 1984; J.D., Harvard University, Cambridge, Mass., 1988; lawyer, private practice; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412214,
            'bio'        => "WALZ, Tim, a Representative from Minnesota; born in West Point, Cuming County, Nebr., April 6, 1964; graduated from Butte High School, Butte, Nebr.; B.S., Chadron State College, Chadron, Nebr., 1989; M.S., Minnesota State University, 2001; attended Saint Mary’s University of Minnesota, Winona, Minn.; Nebraska National Guard, 1981-1996; Minnesota National Guard, 1996-2005; teacher; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412215,
            'bio'        => "ELLISON, Keith, a Representative from Minnesota; born in Detroit, Wayne County, Mich., August 4, 1963; graduated from University of Detroit Jesuit High School and Academy, Detroit, Mich., 1981; B.A., Wayne State University, Detroit, Mich., 1986; J.D., University of Minnesota, 1990; lawyer, private practice; member of the Minnesota state house of representatives, 2003-2006; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412221,
            'bio'        => "CLARKE, Yvette Diane, a Representative from New York; born in Brooklyn, Kings County, N.Y., November 21, 1964; attended Oberlin College, Oberlin, N.Y., 1982-1986; childcare specialist; staff, state senator Velmanette Montgomery, 1989-1991; executive assistant, New York state Workers’ Compensation Board, 1992-1993; youth program director; business development director; member of the New York, N.Y., city council, 2002-2007; unsuccessful candidate for nomination for the One Hundred Ninth Congress in 2004; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412236,
            'bio'        => "COHEN, Stephen, a Representative from Tennessee; born in Memphis, Shelby County, Tenn., May 24, 1949; graduated from Coral Gables Senior High School, Coral Gables, Fla., 1967; B.A., Vanderbilt University, Nashville, Tenn., 1971; J.D., Memphis State University, Memphis, Tenn., 1973; lawyer, private practice; vice-president, Tennessee state constitutional convention, 1977; Shelby County, Tenn., commissioner, 1978-1980; member of the Tennessee state senate, 1982-2006; unsuccessful candidate for nomination for Governor of Tennessee in 1994; delegate to the Democratic National Convention, 1980, 1992, 2004, 2008, 2012; unsuccessful candidate for nomination to the United States House of Representatives in 1996; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present). "
        ],
        [
            'govTrackId' => 412239,
            'bio'        => "WELCH, Peter, a Representative from Vermont; born in Springfield, Hampden County, Mass., May 2, 1947; graduated from Cathedral High School, Springfield, Mass.; A.B., College of the Holy Cross, Worcester, Mass.; 1969; J.D., University of California, Berkeley, Calif., 1973; lawyer, private practice; member of the Vermont state senate, 1981-1989, 2002-2007, minority leader, 1983-1985, president pro tempore, 1985-1989, 2003-2007; unsuccessful candidate for nomination to the One Hundred First Congress in 1988; elected as a Democrat to the One Hundred Tenth and to the four succeeding Congresses (January 3, 2007-present)."
        ],
        [
            'govTrackId' => 412254,
            'bio'        => "TSONGAS, Nicola S. (Niki), (wife of Paul Tsongas), a Representative from Massachusetts; born in Chico, Butte County, Calif., April 26, 1946; graduated from Narimasu American High School, Tokyo, Japan, 1964; attended Michigan State University, East Lansing, Mich.; B.A., Smith College, Northampton, Mass. 1968; J.D., Boston University, Boston, Mass., 1988; social worker; lawyer, private practice; dean of external affairs, Middlesex Community College, Lowell, Mass., 1997-2007; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the resignation of Representative Martin Meehan, and reelected to the four succeeding Congresses (October 16, 2007-present)."
        ],
        [
            'govTrackId' => 412257,
            'bio'        => "FOSTER, Bill, a Representative from Illinois; born in Madison, Wis., October 7, 1955; B. A. University of Wisconsin-Madison, Madison, Wis., 1975; Ph. D., Harvard University, Cambridge, Mass., 1984; physicist; entrepreneur; board member, Batavia Foundation for Educational Excellence; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative John Dennis Hastert and reelected to the succeeding Congress (March 8, 2008-January 3, 2011); unsuccessful candidate for reelection to the One Hundred Twelfth Congress in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412258,
            'bio'        => "CARSON, André, (grandson of Julia Carson), a Representative from Indiana; born in Indianapolis, Marion County, Ind., October 16, 1974; graduated from Arsenal Technical High School, Indianapolis, Ind.; B.A., Concordia University Wisconsin, Mequon, Wis., 2003; M.S., Indiana Wesleyan University, Marion, Ind., 2005; marketing representative; state alcohol license compliance officer; member of the Indianapolis/Marion City-County council, 2007-2008; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the death of United States Representative Julia Carson, and reelected to the four succeeding Congresses (March 11, 2008-present). "
        ],
        [
            'govTrackId' => 412259,
            'bio'        => "SPEIER, Karen Lorraine Jacqueline (Jackie), a Representative from California; born in San Francisco, San Francisco County, Calif., May 14, 1950; graduated from Mercy High School, Burlingame, Calif., 1968; B.A., University of California, Davis, Calif., 1972; J.D., University of California Hastings School of Law, San Francisco, Calif., 1976; staff, United States Representative Leo Joseph Ryan of California, 1973-1978; lawyer, private practice; San Mateo County, Calif., supervisor, 1980-1986; member of the California state assembly, 1986-1998; member of the California state senate, 1998-2006; unsuccessful candidate for lieutenant governor of California, 2006; unsuccessful candidate for the special election to fill the vacancy caused by the death of United States Representative Leo Joseph Ryan of California in 1979; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the death of Representative Thomas Peter Lantos, and reelected to the four succeeding Congresses (April 8, 2008-present)."
        ],
        [
            'govTrackId' => 412263,
            'bio'        => "EDWARDS, Donna F., a Representative from Maryland; born in Yanceyville, Caswell County, N.C., June 28, 1958; B.A., Wake Forest University, Winston-Salem, N.C., 1980; J.D., Franklin Pierce Law Center, Concord, N. H., 1989; lawyer, private practice; clerk, District of Columbia Superior Court Judge; executive director, National Network to End Domestic Violence; executive director, Center for a New Democracy; executive director, The Arca Foundation; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Albert Russell Wynn, and reelected to the four succeeding Congresses (June 17, 2008-present). "
        ],
        [
            'govTrackId' => 412272,
            'bio'        => "CONNOLLY, Gerald E. (Gerry), a Representative from Virginia; born in Boston, Suffolk County, Mass., March 30, 1950; B.A., Maryknoll College, Glen Ellyn, Ill., 1971; M.P.A., Harvard University, Cambridge, Mass., 1979; business executive; nonprofit organization director; member of the Fairfax County, Va., board of supervisors, 1995-2003; chairman of the Fairfax County, Va., board of supervisors, 2004-2008; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412276,
            'bio'        => "GRAYSON, Alan, a Representative from Florida; born in the Bronx, Bronx County, N.Y., March 13, 1958; graduated from Bronx High School of Science, Bronx, N.Y.; A.B., Harvard University, Cambridge, Mass., 1978; M.P.P., Harvard University, Cambridge, Mass., 1983; J.D, Harvard University, Cambridge, Mass., 1983; assistant, U.S. Circuit Court of Appeals, Washington, D.C.; lawyer, private practice; businessman; unsuccessful candidate for election to the United States House of Representatives in 2006; elected as a Democrat to the One Hundred Eleventh Congress (January 3, 2009-January 3, 2011); unsuccessful candidate for reelection to the One Hundred Twelfth Congress in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412282,
            'bio'        => "HIMES, James A., a Representative from Connecticut; born in Lima, Peru, July 5, 1966; graduated from Hopewell Valley Central High School, Pennington, N.J.; A.B., Harvard University, Cambridge, Mass., 1988; M. Phil., Oxford University, Oxford, England, 1990; banking executive; non-profit executive; member of the Greenwich, Conn., housing authority, 2003-2006; chairman of the Greenwich, Conn., housing authority, 2003-2006; member of the Greenwich, Conn., board of estimate and taxation, 2006-2007; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present). "
        ],
        [
            'govTrackId' => 412286,
            'bio'        => "KIRKPATRICK, Ann, a Representative from Arizona; born in McNary, Apache County, Ariz., March 24, 1950; graduated from Blue Ridge High School; B.A., University of Arizona, Tucson, Ariz., 1972; J.D., University of Arizona, Tucson, Ariz., 1979; lawyer, private practice; Coconino County, Ariz., deputy attorney, 1980; Sedona, Ariz., city attorney; member of the Arizona state house of representatives, 2005-2007; elected as a Democrat to the One Hundred Eleventh Congress (January 3, 2009-January 3, 2011); unsuccessful candidate for reelection to the One Hundred Twelfth Congress in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412293,
            'bio'        => "LUJÁN, Ben Ray, a Representative from New Mexico; born in Santa Fe, Santa Fe County, N.Mex., June 7, 1972; graduated from Pojoaque Valley High School, Santa Fe, N. Mex., 1990; attended University of New Mexico, Albuquerque, N.Mex., 1990-1995; B.B.A., New Mexico Highlands University, Las Vegas, N.Mex., 2007; member of the N.Mex. public regulation commission, 2004-2008; chairman, N.Mex. public regulation commission, 2005-2007; N.Mex. deputy state treasurer; director of administrative services, N.Mex. state cultural affairs department; chief financial officer, N.Mex. state cultural affairs department; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present). "
        ],
        [
            'govTrackId' => 412305,
            'bio'        => "PETERS, Gary C., a Senator and a Representative from Michigan; born in Pontiac, Oakland County, Mich., December 1, 1958; B.A., Alma College, Alma, Mich., 1980; M.B.A., finance, University of Detroit, Detroit, Mich., 1984; J.D., Wayne State University, Detroit, Mich., 1989; M.A., philosophy, Michigan State University, East Lansing, Mich., 2007; United States Navy Reserve, 1993-2000, 2001-2005; assistant vice president, Merrill Lynch, 1980-1989; vice president, UBS/Paine Webber, 1989-2003; arbitrator, Financial Industry Regulatory Authority; instructor, Oakland University, Rochester, Mich., and Wayne State University, Detroit, Mich.; professor, Central Michigan University; member, Rochester Hills, Mich., city council, 1991-1993; member of the Michigan state senate, 1995-2002; unsuccessful candidate for Michigan state attorney general in 2002; chief administrative officer for the bureau of investments, state of Michigan, 2003; lottery commissioner, state of Michigan, 2003-2007; elected as a Democrat to the One Hundred Eleventh and to the two succeeding Congresses (January 3, 2009-January 3, 2015); was not a candidate for reelection to the House of Representatives but was elected as a Democrat to the United States Senate in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412307,
            'bio'        => "PINGREE, Chellie, a Representative from Maine; born in Minneapolis, Hennepin County, Minn., April 2, 1955; attended University of Southern Maine, Portland, Maine, 1973; B.A., College of the Atlantic, Bar Harbor, Maine, 1979; farmer; businesswoman; member of the North Haven (Maine) board of assessors, 1981-1987, chairwoman, 1982-1983; member of the North Haven (Maine) planning board, 1981-1991; member of the Maine state senate, 1992-2000, majority leader, 1996-2000; unsuccessful candidate for the United States Senate in 2002; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present). "
        ],
        [
            'govTrackId' => 412308,
            'bio'        => "POLIS, Jared, a Representative from Colorado; born in Boulder, Boulder County, Colo., May 12, 1975; A.B., Princeton University, Princeton, N. J., 1996; business owner; entrepreneur; member of the Colorado state board of education, 2001-2007; chairman of the Colorado state board of education, 2004-2005; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present). "
        ],
        [
            'govTrackId' => 412315,
            'bio'        => "SCHRADER, Kurt, a Representative from Oregon; born in Bridgeport, Fairfield County, Conn., October 19, 1951; graduated from Champaign Centennial High School, Champaign, Ill., 1969; B.A., Cornell University, Ithaca, N.Y., 1973; B.S., University of Illinois, Urbana-Champaign, Ill., 1975; D.V.M., University of Illinois, Urbana-Champaign, Ill., 1977; veterinarian; farmer; member of the Oregon state house of representatives, 1997-2003; member of the Oregon state senate, 2003-2008; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)"
        ],
        [
            'govTrackId' => 412318,
            'bio'        => "TITUS, Alice (Dina), a Representative from Nevada; born in Thomasville, Thomas County, Ga., May 23, 1950; A.B., College of William and Mary, Williamsburg, Va., 1970; M.A., University of Georgia, Athens, Ga., 1973; Ph.D., Florida State University, Tallahassee, Fla., 1976; professor, University of Nevada, Las Vegas, Nev., 1977-2011; member of the Nevada state senate, 1989-2008; minority leader of the Nevada state senate, 1993-2008; unsuccessful candidate for governor of Nevada, 2006; elected as a Democrat to the One Hundred Eleventh Congress (January 3, 2009-January 3, 2011); unsuccessful candidate for reelection to the One Hundred Twelfth Congress in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412319,
            'bio'        => "TONKO, Paul, a Representative from New York; born in Amsterdam, Montgomery County, N.Y., June 18, 1949; graduated from Amsterdam High School, Amsterdam, N.Y., 1967; B.S., Clarkson University, Potsdam, N.Y., 1971; public works engineer; state transportation agency employee; member of the Montgomery County, N.Y. board of supervisors, 1976-1983; chairman, Montgomery County, N.Y. board of supervisors, 1981; member of the New York state assembly, 1983-2007; president, New York state energy research and development authority, 2007-2008; elected as a Democrat to the One Hundred Eleventh and to the three succeeding Congresses (January 3, 2009-present)."
        ],
        [
            'govTrackId' => 412321,
            'bio'        => "WARNER, Mark, a Senator from Virginia; born in Indianapolis, Ind., December 15, 1954; B.A., George Washington University, 1977; J.D., Harvard Law School, 1980; worked on the staff of Senator Christopher Dodd; engaged in the high-technology business; co-founded the company that became Nextel; Virginia Democratic Party chairman, 1993-1995; unsuccessful candidate for election to the United States Senate in 1996; governor of Virginia, 2002-2006; chairman of the National Governors Association 2004-2005; elected as a Democrat to the United States Senate in 2008; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412323,
            'bio'        => "SHAHEEN, Jeanne, a Senator from New Hampshire; born in St. Charles, Mo., January 28, 1947; B.A., Shippensburg State College, Shippensburg, Penn., 1969; M.S.S., University of Mississippi, 1973; New Hampshire State senator, 1990-1996; governor of New Hampshire, 1997-2003; unsuccessful candidate for election to the United States Senate in 2002; elected as a Democrat to the United States Senate in 2008; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412325,
            'bio'        => "MERKLEY, Jeff, a Senator from Oregon; born in Myrtle Creek, Ore., October 24, 1956; B.A., Stanford University, 1979; M.P.A., Princeton University, 1982; government analyst; nonprofit executive; Oregon State representative, 1999-2008; speaker of the Oregon State House of Representative, 2007-2008; elected as a Democrat to the United States Senate in 2008; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412327,
            'bio'        => "FUDGE, Marcia L., a Representative from Ohio; born in Cleveland, Cuyahoga County, Ohio, October 29, 1952; graduated from Shaker Heights High School, Shaker Heights, Ohio, 1971; B.S., Ohio State University, Columbus, Ohio, 1975; J.D., Cleveland Marshall College of Law, Cleveland State University, Cleveland, Ohio, 1983; lawyer, private practice; director, Cuyahoga County, Ohio, prosecutor’s office; director, Cuyahoga County, Ohio, budget commission; director, Cuyahoga County, Ohio, personal property tax department; staff, United States Representative Stephanie Tubbs Jones of Ohio, 1999-2000; mayor of Warrensville Heights, Ohio, 2000-2008; elected as a Democrat to the One Hundred Tenth Congress, by special election, to fill the vacancy caused by the death of United States Representative Stephanie Tubbs Jones, and reelected to the four succeeding Congresses (November 18, 2008-present). "
        ],
        [
            'govTrackId' => 412331,
            'bio'        => "QUIGLEY, Mike, a Representative from Illinois; born in Indianapolis, Marion County, Ind., October 17, 1958; attended Glenbard North High School, Carol Stream, Ill.; B.A., Roosevelt University, Chicago, Ill., 1981; M.P.P., University of Chicago, Chicago, Ill., 1985; J.D. Loyola University School of Law, Chicago, Ill., 1989; professor; lawyer; legislative aide; member of the Cook County, Ill., board of commissioners, 1998-2009; elected as a Democrat to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Rahm Emanuel and reelected to the three succeeding Congresses (April 7, 2009-present). "
        ],
        [
            'govTrackId' => 412378,
            'bio'        => "FRANKEN, Al, a Senator from Minnesota; born in Manhattan, N.Y., May 21, 1951; A.B., Harvard University, Cambridge, Mass., 1973; screenwriter; comedian; author; radio talk show host; elected as a Democrat to the United States Senate in 2008 for the term beginning January 3, 2009, but the election was contested; following a June 30, 2009, decision in his favor by the Minnesota state supreme court, he took the oath of office and began service on July 7, 2009; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412379,
            'bio'        => "CHU, Judy, a Representative from California; born in Los Angeles, Los Angeles County, Calif., July 7, 1953; B.A., University of California, Los Angeles, Calif., 1974; Ph.D., California School of Professional Psychology, Los Angeles, Calif., 1979; professor, East Los Angeles College, Monterey Park, Calif., 1981-1988; member of the Garvey, Calif., school district, 1985-1988; member of the Monterey Park, Calif., city council, 1988-2001; Mayor of Monterey Park, Calif.; member of the California state assembly, 2001-2006; member of the California Board of Equalization, 2006-2009; vice chair of the California Board of Equalization, 2009; elected as a Democrat to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Hilda Solis, and reelected to the three succeeding Congresses (July 14, 2009-present)."
        ],
        [
            'govTrackId' => 412382,
            'bio'        => "GARAMENDI, John, a Representative from California; born in Camp Blanding, Clay County, Fla., January 24, 1945; B.A., University of California, Berkeley, Calif., 1966; M.B.A., Harvard University, Cambridge, Mass., 1970; businessman; rancher; United States Peace Corps, 1966-1968; member of the California state assembly 1974-1976; member of the California state senate 1976-1990; California state insurance commissioner, 1991-1994, 2002-2006; deputy secretary, United States Department of the Interior, 1995-1998; lieutenant governor of California, 2007-2009; elected as a Democrat to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Ellen Tauscher, and reelected to the two succeeding Congresses (November 3, 2009-present). "
        ],
        [
            'govTrackId' => 412385,
            'bio'        => "DEUTCH, Theodore E. (Ted), a Representative from Florida; born in Bethlehem, Northampton County, Pa., May 7, 1966; graduated from Liberty High School, Bethlehem, Pa., 1984; A.B., University of Michigan, Ann Arbor, Mich., 1988; J.D., University of Michigan, Ann Arbor, Mich., 1990; lawyer, private practice; member of the Florida state senate, 2007-2010; elected as a Democrat to the One Hundred Eleventh Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Robert Wexler, and reelected to the three succeeding Congresses (April 13, 2010-present). "
        ],
        [
            'govTrackId' => 412390,
            'bio'        => "COONS, Christopher A., a Senator from Delaware; born on September 9, 1963, in Greenwich, Conn.; B.A., Amherst College, 1985; J.D., Yale University Law School, 1992; M.A.R., Yale Divinity School, 1992; worked in the non-profit sector; attorney; served as president of the New Castle County Council 2001-2005; County Executive of New Castle County 2005-2010; elected as a Democrat to the United States Senate in the November 2, 2010, special election to the term ending January 3, 2015, a seat previously held by appointed Senator Edward E. Kaufman, and took the oath of office on November 15, 2010; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412396,
            'bio'        => "SEWELL, Terri, a Representative from Alabama; born in Huntsville, Madison County, Alabama, on January 1, 1965; graduated from Selma High School, Selma, Ala., 1982; A.B., Princeton University, Princeton, N.J., 1986; M.A., Oxford University, Oxford, U.K., 1988; J.D., Harvard University, Cambridge, Mass., 1992; lawyer, private practice; elected as a Democrat to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412404,
            'bio'        => "BASS, Karen, a Representative from California; born in Los Angeles, Los Angeles County, California, October 3, 1953; graduated from Hamilton High School, Los Angeles, Calif.; B.S., California State University, Dominguez Hills, Calif., 1990; P.A., University of Southern California, Los Angeles, Calif.; physician’s assistant; faculty, University of Southern California, Los Angeles, Calif.; member of the California state assembly, 2005-2010; speaker, California state assembly, 2008-2010; elected as a Democrat to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present). "
        ],
        [
            'govTrackId' => 412407,
            'bio'        => "John Charles Carney, Jr. (born May 20, 1956) is an American politician who has served as the U.S. Representative for Delaware's at-large congressional district since 2011. He is a member of the Democratic Party. He was the 24th Lieutenant Governor of Delaware from 2001 to 2009. Prior to that, he served as Delaware's Secretary of Finance; he also unsuccessfully sought the Democratic nomination for Governor of Delaware in 2008."
        ],
        [
            'govTrackId' => 412412,
            'bio'        => "WILSON, Frederica, a Representative from Florida; born in Miami, Miami-Dade County, Florida, on November 5, 1942; B.A., Fisk University, Nashville, Tenn., 1963; M.A., University of Miami, Coral Gables, Fla., 1972; elementary school principal; member of the Miami-Dade County school board; member of the Florida state house of representatives, 1998-2002; member of the Florida state senate, 2002-2010; elected as a Democrat to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present)."
        ],
        [
            'govTrackId' => 412432,
            'bio'        => "Cedric Levon Richmond (born September 13, 1973) is an American politician in the Democratic Party who has been the U.S. Representative for Louisiana's 2nd congressional district since 2011. His district includes most of New Orleans."
        ],
        [
            'govTrackId' => 412435,
            'bio'        => "KEATING, William R., a Representative from Massachusetts; born in Norwood, Norfolk County, Mass., September 6, 1952; B.A., Boston College, Boston, Mass., 1974; M.B.A., Boston College, Chestnut Hill, Mass., 1982; J.D., Suffolk University, Chestnut Hill, Mass., 1985; member of the Massachusetts state house of representatives, 1977-1984; member of the Massachusetts state senate, 1985-1998; Norfolk County, Mass. district attorney, 1998-2010; elected as a Democrat to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present). "
        ],
        [
            'govTrackId' => 412470,
            'bio'        => "CICILLINE, David N., a Representative from Rhode Island; born in Providence, Providence County, R.I., July 15, 1961; graduated from Narragansett High School, Providence, R.I., 1979; B.A., Brown University, Providence, R.I., 1983; J.D., Georgetown University, Washington, D.C., 1986; public defender, Washington, D.C., 1986-1987; lawyer, private practice; lawyer, public advocate; faculty, Roger Williams Law School, Bristol, R.I.; unsuccessful nominee to the Rhode Island state senate in 1992; member of the Rhode Island state house of representatives, 1995-2003; delegate to the Democratic National Convention in 2008; Mayor of Providence R.I., 2003-2011; elected as a Democrat to the One Hundred Twelfth and to the two succeeding Congresses (January 3, 2011-present). "
        ],
        [
            'govTrackId' => 412498,
            'bio'        => "HAHN, Janice, a Representative from California; born in Los Angeles, Los Angeles County, Calif., March 30, 1952; graduated from Lutheran High School, Los Angeles, Calif., 1970; B.S., Abilene Christian University, Abilene, Tex., 1974; teacher; businesswoman; unsuccessful candidate for election to the Los Angeles, Calif., city council in 1993; member of the Los Angeles, Calif., city charter reform commission, 1997-1999; unsuccessful candidate for election to the United States House of Representatives in 1998; member of the Los Angeles, Calif., city council, 2001-2011; unsuccessful candidate for lieutenant governor of California in 2010; elected as a Democrat to the One Hundred Twelfth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Jane Harman, and reelected to the two succeeding Congresses (July 12, 2011-present). "
        ],
        [
            'govTrackId' => 412501,
            'bio'        => "BONAMICI, Suzanne, a Representative from Oregon; born in Detroit, Wayne County, Mich., October 14, 1954; A.A., Lane Community College, Eugene, Oreg. 1978; B.A., University of Oregon, Eugene, Oreg., 1980; J.D., University of Oregon, Eugene, Oreg., 1983; lawyer, Federal Trade Commission, Washington, D.C.; lawyer, private practice; staff, Oregon state house of representatives, 2001-2006; member of Oregon state house of representatives 2007-2008; member of Oregon state senate, 2008-2011; elected as a Democrat to the One Hundred Twelfth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative David Wu, and reelected to the two succeeding Congresses (January 31, 2012-present)."
        ],
        [
            'govTrackId' => 412505,
            'bio'        => "DelBENE, Suzan K., a Representative from Washington; born in Selma, Dallas County, Ala., February 17, 1962; B.A., Reed College, Portland, Oreg. 1983; M.B.A., University of Washington, Seattle, Wash., 1990; business executive; unsuccessful candidate for election to the United States House of Representatives in 2010; director, Washington state department of revenue, 2010-2012; elected simultaneously as a Democrat to the One Hundred Twelfth and One Hundred Thirteenth Congresses, by special election, to fill the vacancy caused by the resignation of United States Representative Jay Inslee, and reelected to the succeeding Congress (November 6, 2012-present)."
        ],
        [
            'govTrackId' => 412506,
            'bio'        => "PAYNE, Donald, Jr., (son of Donald Milford Payne), a Representative from New Jersey; born in Newark, Essex County, N.J., December 17, 1958; attended Kean College, Union, N.J.; member of the New Jersey highway authority, 1990-1996; member of the Essex County educational services commission; freeholder-at-large, Essex County, N.J., board of freeholders, 2005-2012; at-large representative, Newark, N.J., city council, 2006-2012, president, 2010-2012; elected simultaneously as a Democrat to the One Hundred Twelfth and One Hundred Thirteenth Congresses, by special election, to fill the vacancy caused by the death of United States Representative Donald Milford Payne, and to the succeeding Congress (November 6, 2012-present). "
        ],
        [
            'govTrackId' => 412507,
            'bio'        => "SCHATZ, Brian Emanuel, a Senator from Hawaii; born in Ann Arbor, Washtenaw County, Mich., October 20, 1972; attended Punahou School in Honolulu, Hawaii; B.A. Pomona College 1994; teacher; member of the Hawaii state house of representatives, 1998-2006; CEO, Helping Hands Hawaii, 2002-2010; chairman, Democratic Party of Hawaii, 2008-2011; Hawaii lieutenant governor, 2010-2012; appointed as a Democrat to the United States Senate on December 26, 2012, to fill the vacancy caused by the death of Daniel Inouye, and took the oath of office on December 27, 2012; elected in 2014 in a special election for the term ending January 3, 2017."
        ],
        [
            'govTrackId' => 412509,
            'bio'        => "SINEMA, Kyrsten, a Representative from Arizona; born in Tucson, Pima County, Ariz., July 12, 1976; B.A., Brigham Young University, Provo, Utah; M.S., Arizona State University, Tempe, Ariz., 1999; J.D., Arizona State University, Tempe, Ariz., 2004; Ph.D., Arizona State University, Tempe, Ariz., 2012; social worker; lawyer, private practice; adjunct professor; unsuccessful candidate to the Arizona state house of representatives in 2002; member of the Arizona state house of representatives, 2004-2010; member of the Arizona state senate, 2010-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412511,
            'bio'        => "HUFFMAN, Jared, a Representative from California; born in Independence, Jackson County, Mo., February 18, 1964; graduated from William Chrisman High School, Independence, Mo., 1982; B.A., University of California, Santa Barbara, Calif., 1986; J.D., Boston College, Newton, Mass., 1990; lawyer, private practice; senior attorney, Natural Resources Defense Council, 2001-2006; member of the Marin County, Calif., municipal water district board of directors, 2001-2006; member of the California state assembly, 2006-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412512,
            'bio'        => "BERA, Ami, a Representative from California; born in Los Angeles, Los Angeles County, Calif., March 2, 1965; B.S., University of California, Irvine, Calif., 1987; M.D., University of California, Irvine, Calif., 1991; physician; professor; associate dean, University of California-Irvine School of Medicine, Irvine, Calif., 2004-2007; Sacramento County, Calif. chief medical officer, 1999-2004; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412514,
            'bio'        => "SWALWELL, Eric, a Representative from California; born in Sac City, Sac County, Iowa, November 16, 1980; graduated from Dublin High School, Dublin, Calif.; B.A. University of Maryland, College Park, Md., 2003; J.D., University of Maryland School of Law, Baltimore, Md., 2006; Alameda County, Calif. prosecutor; Alameda County, Calif. deputy district attorney, 2006-2012; member of the Dublin, Calif., town council, 2010-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412516,
            'bio'        => "BROWNLEY, Julia, a Representative from California; born in Aiken, Aiken County, S.C., August 28, 1952; B.A., Mount Vernon College, Washington, D.C., 1975; M.B.A., American University, Washington, D.C., 1979; business manager; member of the Santa Monica-Malibu school district board, 1994-2006; member of the California state assembly, 2006-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412517,
            'bio'        => "CÁRDENAS, Tony, a Representative from California; born in San Fernando, Los Angeles County, Calif., March 31, 1963; B.A., University of California, Santa Barbara, Calif., 1986; realtor; insurance agent; member of the California state assembly, 1996-2002; member of the Los Angeles, Calif., city council, 2003-2013; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412519,
            'bio'        => "RUIZ, Raul, a Representative from California; born in Zacatecas, Mexico, August 25, 1972; graduated from Coachella Valley High School, Coachella, Calif., 1990; B.S., University of California, Los Angles, Calif., 1994; M.D. and M.P.P., Harvard University, Cambridge, Mass., 2001; M.P.H., Harvard University, Cambridge, Mass., 2007; physician; associate dean, University of California-Riverside School of Medicine, Riverside, Calif., 2011-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412520,
            'bio'        => "TAKANO, Mark, a Representative from California; born in Riverside, Riverside County, Calif., December 10, 1960; graduated from La Sierra High School, Riverside, Calif.; A.B., Harvard University, Cambridge, Mass., 1983; M.F.A., University of California, Riverside, Calif.; teacher; member of the Riverside Community College district board of trustees, 1990-2012; president of the Riverside Community College district board of trustees, 1992, 1997, 1998, 2005, 2006; unsuccessful candidate for election to the United States House of Representatives in 1992 and 1998; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412521,
            'bio'        => "LOWENTHAL, Alan, a Representative from California; born in Manhattan, New York County, N.Y., March 8, 1941; B.A., Hobart College, Geneva, N.Y., 1962; M.A., Ohio State University, Columbus, Ohio, 1965; Ph.D., Ohio State University, Columbus, Ohio, 1967; professor; psychologist; member of the Long Beach Calif., city council, 1992-1998; member of the California state assembly, 1998-2004; member of the California state senate, 2004-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412522,
            'bio'        => "VARGAS, Juan, a Representative from California; born in National City, San Diego County, Calif., March 7, 1961; B.A., University of San Diego, San Diego, Calif., 1983; M.A., Fordham University, Bronx, N.Y., 1987; J.D., Harvard University, Cambridge, Mass., 1991; lawyer; business executive; member of the San Diego, Calif., city council, 1993-2000; member of the California state assembly, 2000-2006; member of the California state senate, 2010-2012; unsuccessful candidate for nomination to the United States House of Representatives in 1992, 1996, and 2006; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412523,
            'bio'        => "PETERS, Scott, a Representative from California; born in Springfield, Clark County, Ohio, June 17, 1958; B.A., Duke University, Durham, N.C., 1980; J.D., New York University, New York, N.Y., 1984; lawyer, private practice; economist, United States Environmental Protection Agency, 1980-1981; deputy attorney, city of San Diego, Calif., 1991-1996; member of the San Diego, Calif., city council, 2000-2008; president of the San Diego, Calif., city council, 2006-2008; commissioner, San Diego unified port district, 2009-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412524,
            'bio'        => "ESTY, Elizabeth, a Representative from Connecticut; born in Oak Park, Cook County, Ill., August 25, 1959; graduated from Winona High School, Winona, Minn., 1977; A.B., Harvard University, Cambridge, Mass., 1981; J.D., Yale University, New Haven, Conn., 1985; law clerk; lawyer, private practice; professor; member of the Cheshire, Conn., town council, 2005-2008; member of the Connecticut state general assembly, 2008-2010; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412527,
            'bio'        => "MURPHY, Patrick, a Representative from Florida; born in Miami, Miami-Dade County, Fla., March 30, 1983; B.A., University of Miami, Coral Gables, Fla., 2006; construction executive; accountant; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412529,
            'bio'        => "FRANKEL, Lois, a Representative from Florida; born in New York, New York County, N.Y., May 16, 1948; graduated from Great Neck South High School, Great Neck, N.Y., 1966; B.A., Boston University, Boston, Mass., 1970; J.D., Georgetown University, Washington, D.C., 1973; lawyer, private practice; member of the Florida state house of representatives, 1986-1992, 1994-2002; Mayor of West Palm Beach, Fl., 2003-2011; minority leader of the Florida state house of representatives, 2000-2002; unsuccessful candidate for election to the United States House of Representatives in 1992; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412532,
            'bio'        => "GABBARD, Tulsi, a Representative from Hawaii; born in Leloaloa, American Samoa, April 12, 1981; B.S.B.A., Hawaii Pacific University, Honolulu, Hawaii, 2009; member of the Hawaii state house of representatives, 2002-2004; Hawaii Army National Guard, 2003-present; staff, Senator Daniel Akaka of Hawaii; member of the Honolulu, Hawaii, city council, 2010-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412533,
            'bio'        => "DUCKWORTH, Tammy, a Representative from Illinois; born in Bangkok, Thailand, March 12, 1968; graduated from President William McKinley High School, Honolulu, Hawaii, 1985; B.A., University of Hawaii, Manoa, Hawaii, 1989; M.A., The George Washington University, Washington, D.C., 1992; attended Northern Illinois University, DeKalb, Ill.; Illinois Army National Guard, 1996-present; unsuccessful candidate for election to the United States House of Representatives in 2006; director, Ill. department of veterans’ affairs, 2006-2009; assistant secretary, United States Department of Veterans’ Affairs, 2009-2011; delegate to the Democratic National Convention, 2012; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412537,
            'bio'        => "BUSTOS, Cheri, a Representative from Illinois; born in Springfield, Sangamon County, Ill., October 17, 1961; graduated from Springfield High School, Springfield, Ill., 1979; attended Illinois College, Jacksonville, Ill.; B.A., University of Maryland, College Park, Md., 1983; M.A., University of Illinois, Springfield, Ill., 1985; journalist; businesswoman; member of the East Moline, Ill., city council, 2007-2011; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412543,
            'bio'        => "KENNEDY, Joseph P. III, (son of Joseph Patrick Kennedy, II, great-nephew of Edward Moore Kennedy and John Fitzgerald Kennedy, and great-great-grandson of John Francis Fitzgerald, first cousin once removed of Patrick Joseph Kennedy), a Representative from Massachusetts; born in Brighton, Suffolk County, Mass., October 4, 1980; B.S., Stanford University, Stanford, Calif., 2003; J.D., Harvard University, Cambridge, Mass., 2009; United States Peace Corps, 2004-2006; research analyst; Middlesex, Mass. county assistant district attorney, 2011-2012; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412544,
            'bio'        => "DELANEY, John, a Representative from Maryland; born in Wood-Ridge, Bergen County, N.J., April 16, 1963; B.S., Columbia University, New York, N.Y., 1985; J.D., Georgetown University, Washington, D.C., 1988; lawyer, private practice; business owner; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412546,
            'bio'        => "KILDEE, Dan, (nephew of Dale Edward Kildee), a Representative from Michigan; born in Flint, Genesee County, Mich., August 11, 1958; attended, University of Michigan, Flint, Mich.; B.S., Central Michigan University, Mount Pleasant, Mich.; founder, Genesee County Land Bank; co-founder and chief executive, Center for Community Progress; member of the Flint, Mich., board of education, 1977-1985; member of the Genesee County, Mich., board of commissioners, 1985-1997; Genesee County, Mich., treasurer, 1997-2009; unsuccessful nominee for Governor of Michigan in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412557,
            'bio'        => "KUSTER, Ann McLane, a Representative from New Hampshire; born in Concord, Merrimack County, N.H., September 5, 1956; B.A., Dartmouth College, Hanover, N.H., 1978; J.D., Georgetown University Law Center, Washington, D.C., 1984; staff, United States Representative Paul Norton (Pete) McCloskey, Jr., of California, 1978-1981; author; lawyer, private practice; professional advocate; consultant; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412558,
            'bio'        => "LUJAN GRISHAM, Michelle, a Representative from New Mexico; born in Los Alamos, Los Alamos County, N.Mex., October 24, 1959; graduated from St. Michael’s High School, Santa Fe, N.Mex., 1977; B.U.S., University of New Mexico, Albuquerque, N.Mex., 1981; J.D., University of New Mexico, 1987; lawyer, New Mexico state bar association; business executive; director, New Mexico state agency on aging, 1991-2002; New Mexico secretary of aging and long-term services, 2002-2004; New Mexico secretary of health, 2004-2007; unsuccessful nominee for election to the United States House of Representatives in 2008; Bernalillo County, N.Mex., board of commissioners, 2010-2012; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412560,
            'bio'        => "MENG, Grace, a Representative from New York; born in Queens, Queens County, N.Y., October 1, 1975; A.B., University of Michigan, Ann Arbor, Mich., 1997; J.D., Yeshiva University, New York City, N.Y., 2002; lawyer, private practice; member of the New York state assembly, 2009-2012; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412561,
            'bio'        => "JEFFRIES, Hakeem, a Representative from New York; born in Brooklyn, Kings County, N.Y., August 4, 1970; B.A., Binghamton University, Vestal, N.Y., 1992; M.P.P., Georgetown University, Washington, D.C., 1994; J.D., New York University, New York, N.Y., 1997; law clerk, United States District Court for the Southern District of New York, 1997-1998; lawyer, private practice; member of the New York state assembly, 2007-2012; elected as a Democrat to the One Hundred Thirteenth Congress and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412562,
            'bio'        => "MALONEY, Carolyn Bosher, a Representative from New York; born in Greensboro, Guilford County, N.C., February 19, 1946; B.A., Greensboro College, Greensboro, N.C., 1968; community affairs coordinator, New York, N.Y., board of education welfare education program, 1972-1975; staff, New York, N.Y., board of education center for career and occupational education, 1975-1976; staff, New York state assembly committee on housing, 1977; senior program analyst, New York state assembly committee on cities, 1977-1979; executive director, advisory council, office of the New York state senate minority leader, 1979-1982; director of special projects, office of the New York state senate minority leader, 1980-1982; member of the New York, N.Y., city council, 1982-1992; elected as a Democrat to the One Hundred Third and to the eleven succeeding Congresses (January 3, 1993-present); chair, Joint Economic Committee (One Hundred Eleventh Congress). "
        ],
        [
            'govTrackId' => 412565,
            'bio'        => "BEATTY, Joyce, a Representative from Ohio; born in Dayton, Montgomery County, Ohio, March 12, 1950; graduated from Nettie Lee Roth High School, Dayton, Ohio; B.A., Central State University, Wilberforce, Ohio, 1972; M.S., Wright State University, Fairborn, Ohio, 1974; attended University of Cincinnati, Cincinnati, Ohio; Montgomery County, Ohio, executive director, human services; professor; businesswoman; member of the Ohio state house of representatives, 1999-2008; delegate to the Democratic National Convention, 1996, 2000, 2004, 2008, 2012; administrator, The Ohio State University, Columbus, Ohio, 2008-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412571,
            'bio'        => "CARTWRIGHT, Matt, a Representative from Pennsylvania; born in Erie, Erie County, Pa., May 1, 1961; A.B., Hamilton College, Clinton, N.Y., 1983; attended Temple University School of Law, Philadelphia, Pa., 1984; J.D., University of Pennsylvania, Philadelphia, Pa., 1986; lawyer, private practice; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412575,
            'bio'        => "O'ROURKE, Beto, a Representative from Texas; born in El Paso, El Paso County, Tex., September 26, 1972; attended El Paso High School and graduated from Woodberry Forest School, Woodberry Forest, Va.; B.A., Columbia University, New York, N.Y., 1995; business owner; member of the El Paso, Tex., city council, 2005-2011; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412576,
            'bio'        => "CASTRO, Joaquin, a Representative from Texas; born in San Antonio, Bexar County, Tex., September 16, 1974; graduated from Thomas Jefferson High School, San Antonio, Tex., 1992; B.A., Stanford University, Stanford, Calif., 1996; J.D., Harvard University, Cambridge, Mass., 2000; lawyer, private practice; member of the Texas state house of representatives, 2002-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412579,
            'bio'        => "VEASEY, Marc, a Representative from Texas; born in Fort Worth, Tarrant County, Tex., January 3, 1971; graduated from Arlington Heights High School, Fort Worth, Tex., 1990; B.S., Texas Wesleyan University, Fort Worth, Tex., 1995; journalist; staff, United States Representative J. Martin Frost of Texas; real estate broker; member of the Texas state house of representatives, 2004-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412580,
            'bio'        => "VELA, Filemon, a Representative from Texas; born in Harlingen, Cameron County, Tex., February 13, 1963; graduated from St. Joseph’s Academy, Brownsville, Tex.; B.A., Georgetown University, Washington, D.C., 1985; J.D., University of Texas, Austin, Tex., 1987; civil attorney; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present)."
        ],
        [
            'govTrackId' => 412583,
            'bio'        => "KILMER, Derek, a Representative from Washington; born in Port Angeles, Clallam County, Wash., January 1, 1974; A.B., Princeton University, Princeton, N.J., 1996; D.Phil., University of Oxford, Oxford, England, 2003; businessman; member of the Washington state house of representatives, 2005-2007; member of the Washington state senate, 2007-2012; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412584,
            'bio'        => "HECK, Denny, a Representative from Washington; born in Vancouver, Clark County, Wash., July 29, 1952; B.A., Evergreen State College, Olympia, Wash., 1973; attended Portland State University, Portland, Oreg., 1974-1975; businessman; television broadcaster; member of the Washington state house of representatives, 1976-1986; minority leader of the Washington state house of representatives, 1977-1985; chief clerk of the Washington state house of representatives, 1985-1987; unsuccessful candidate for election to the United States House of Representatives in 2010; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412585,
            'bio'        => "POCAN, Mark, a Representative from Wisconsin; born in Kenosha, Kenosha County, Wis., August 14, 1964; graduated from Mary D. Bradford High School, Kenosha, Wis., 1982; B.A., University of Wisconsin, Madison, Wis., 1986; businessman; member of the Dane County, Wis., board of supervisors, 1991-1996; member of the Wisconsin state assembly, 1999-2013; elected as a Democrat to the One Hundred Thirteenth and to the succeeding Congress (January 3, 2013-present). "
        ],
        [
            'govTrackId' => 412595,
            'bio'        => "KELLY, Robin L., a Representative from Illinois; born in New York, N.Y., April 30, 1956; graduated from Rhodes Prep High School, New York, N.Y., 1973; B.A., Bradley University, Peoria, Ill., 1977; M.A., Bradley University, Peoria, Ill., 1982; Ph.D., Northern Illinois University, DeKalb, Ill., 2004; counselor; community affairs director, Matteson, Ill., 1992-2006; member of the Illinois state house of representatives, 2003-2007; chief of staff, Illinois state treasurer, 2007-2010; chief administrative officer, Cook County, Ill., 2010-2012; elected as a Democrat to the One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Jesse L. Jackson, Jr., and to the succeeding Congress (April 9, 2013-present). "
        ],
        [
            'govTrackId' => 412598,
            'bio'        => "BOOKER, Cory Anthony, a Senator from New Jersey; born on April 27, 1969, in Washington, D.C.; graduated Northern Valley Regional High School, Old Tappan, N.J., 1987; B.A., Stanford University, 1991; M.A., Stanford University, 1992; attended The Queen’s College, University of Oxford, Oxford, England, as a Rhodes Scholar and received a graduate degree in 1994; J.D., Yale Law School, 1997; worked as an attorney in the non-profit sector; Newark City Council 1998-2002; Mayor of Newark, N.J. 2006-2013; elected as a Democrat to the United States Senate in a special election on October 16, 2013, to fill the vacancy caused by the death of Frank Lautenberg, a seat subsequently held by appointed senator Jeffrey Chiesa, and took the oath of office on October 31, 2013; reelected in 2014 for the term ending January 3, 2021."
        ],
        [
            'govTrackId' => 412600,
            'bio'        => "CLARK, Katherine M., a Representative from Massachusetts; born in New Haven, New Haven County, Conn., July 17, 1963; B.A., Saint Lawrence University, Canton, N.Y., 1985; J.D., Cornell University, Ithaca, N.Y., 1989; M.P.A., John F. Kennedy School of Government, Harvard University, Cambridge, Mass., 1997; lawyer, private practice; lawyer, Colorado district attorney’s council; general counsel, Massachusetts state office of child care services; policy division chief, Office of the Attorney General, State of Massachusetts; clerk, federal court, 1990-1991; prosecutor, Office of the Attorney General, State of Colorado, 1991-1993; member of the Melrose, Mass. school committee, 2001-2007; member of the Massachusetts state house of representatives, 2008-2010; member of the Massachusetts state senate, 2010-2013; elected as a Democrat to the One Hundred Thirteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Edward J. Markey, and to the succeeding Congress (December 10, 2013-present). "
        ],
        [
            'govTrackId' => 412606,
            'bio'        => "NORCROSS, Donald, a Representative from New Jersey; born in Camden, Camden County, N.J., December 13, 1958; graduated from Pennsauken High School, Pennsauken, N.J., 1977; A.S., Camden County College, Camden, N.J., 1979; electrician; union representative; member of the New Jersey state assembly, 2010; member of the New Jersey state senate, 2010-2014; elected simultaneously as a Democrat to the One Hundred Thirteenth and One Hundred Fourteenth Congress, by special election, to fill the vacancy caused by the resignation of United States Representative Robert Andrews (November 4, 2014-present). "
        ],
        [
            'govTrackId' => 412607,
            'bio'        => "ADAMS, Alma, a Representative from North Carolina; born in High Point, Guilford County, N.C., May 27, 1946; graduated from West Side High School, Newark, N.J., 1964; B.S., North Carolina Agricultural and Technical State University, Greensboro, N.C., 1968; M.S., North Carolina Agricultural and Technical State University, Greensboro, N.C., 1972; Ph.D., Ohio State University, Columbus, Ohio, 1981; artist; faculty, Bennett College, Greensboro, N.C., 1972-2012; member of the Greensboro, N.C., school board, 1984-1986; member of the Greensboro, N.C., city council, 1987-1994; member of the North Carolina state house of representatives, 1994-2014; elected simultaneously as a Democrat to the One Hundred Thirteenth and One Hundred Fourteenth Congresses, by special election, to fill the vacancy caused by the resignation of United States Representative Melvin L. Watt (November 4, 2014-present). "
        ],
        [
            'govTrackId' => 412612,
            'bio'        => "GALLEGO, Ruben, a Representative from Arizona; born in Chicago, Cook County, Ill., November 20, 1979; A.B., Harvard University, Cambridge, Mass., 2004; United States Marine Corps, 2002-2006; public affairs consultant, 2007-2008; delegate, Democratic National Convention, 2008; vice-chair, Ariz. Democratic party, 2009; member of the Arizona state house of representatives, 2010-2014; assistant minority leader, Arizona state house of representatives, 2012-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412613,
            'bio'        => "DESAULNIER, Mark James, a Representative from California; born in Lowell, Middlesex County, Mass., March 31, 1952; B.A. College of the Holy Cross, Worcester, Mass., 1974; fellow, John F. Kennedy School of Government, Harvard University, Cambridge, Mass., 2003; deputy probation officer; warehouse worker; hotel service employee; restaurant worker; general manager; business owner; member of the Concord, Calif., city council, 1991-1994; Mayor of Concord, Calif., 1993; member of the Contra Costa County, Calif., board of supervisors, 1994-2006; chair, Contra Costa County, Calif. board of supervisors, 1994; member of the California state assembly, 2006-2008; unsuccessful candidate for election to the United States House of Representatives in 2009; member of the California state senate, 2008-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412615,
            'bio'        => "AGUILAR, Peter Rey, a Representative from California; born in Fontana, San Bernadino County, Calif., June 19, 1979; B.S., University of Redlands, Redlands, Calif., 2001; business owner; interim director & deputy director, Inland Empire regional office of the Governor of California, 2001; member of the Redlands, Calif., city council, 2006-2014; Mayor of Redlands, Calif., 2010-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412616,
            'bio'        => "LIEU, Ted, a Representative from California; born in Taipei, Taiwan, March 29, 1969; graduated from St. Ignatius High School, Cleveland, Ohio, 1987; B.A., Stanford University, Stanford, Calif., 1991; B.S., Stanford University, Stanford, Calif., 1991; J.D., Georgetown University, 1994; United States Air Force, 1995-1999; United States Air Force Reserve, 2000-present; judicial clerk, United States Court of Appeals, Ninth Circuit; lawyer, private practice; member of the Torrance, Calif., city council, 2002-2005; member of the California state assembly, 2005-2010; unsuccessful candidate for California state attorney general in 2010; member of the California state senate, 2011-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412617,
            'bio'        => "TORRES, Norma Judith, a Representative from California; born in Escuintla, Guatemala, April 4, 1965; attended Mount Saint Antonio College, Walnut, Calif., 1999-2000; attended Rio Hondo College, Whittier, Calif.; B.A., National Labor College, Silver Spring, Md., 2012; emergency dispatcher; sales representative; member of the Pomona, Calif., city council, 2000-2006; Mayor of Pomona, Calif., 2006-2008; member of the California state assembly, 2008-2013; member of the California state senate, 2013-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412620,
            'bio'        => "GRAHAM, Gwendolyn (Gwen), (daughter of Bob Graham), a Representative from Florida; born in Miami Lakes, Miami-Dade County, Fla., January 31, 1963; graduated from Leon High School, Tallahassee, Fla., 1980; B.A., University of North Carolina, Chapel Hill, N.C., 1984; J.D., American University, Washington, D.C., 1988; lawyer, private practice; director of employee relations, Leon County, Fla., school district; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412626,
            'bio'        => "TAKAI, Mark, a Representative from Hawaii; born in Honolulu, Honolulu County, Hawaii, July 1, 1967; graduated from Pearl City High School, Pearl City, Hawaii, 1985; B.A., University of Hawaii, Manoa , Hawaii, 1990; M.P.H., University of Hawaii, Manoa, Hawaii, 1993; Hawaii Army National Guard, 1999-present; member of the Hawaii state house of representatives, 1994-2014; vice speaker, Hawaii state house of representatives, 2005-2006; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412632,
            'bio'        => "MOULTON, Seth, a Representative from Massachusetts; born in Salem, Essex County, Mass., October 24, 1978; graduated from Phillips Academy Andover, Andover, Mass., 1997; B.S., Harvard University, Cambridge, Mass., 2001; M.B.A., M.P.P., Harvard University, Cambridge, Mass., 2011; United States Marine Corps, 2002-2008; business manager; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412637,
            'bio'        => "DINGELL, Debbie, (wife of John David Dingell, Jr.), a Representative from Michigan; born in Detroit, Wayne County, Mich., November 23, 1953; graduated from the Convent of the Sacred Heart, Grosse Pointe, Mich.; B.S.F.S., Georgetown University, Washington, D.C., 1975; M.S., Georgetown University, Washington, D.C., 1996; analyst; professional advocate; business executive; non-profit executive; board of governors, Wayne State University, 2007-2014; member of the Democratic National Committee; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412638,
            'bio'        => "LAWRENCE, Brenda L, a Representative from Michigan; born in Detroit, Wayne County, Mich., October 18, 1954; graduated from Pershing High School, Detroit, Mich.; attended University of Detroit Mercy, Detroit, Mich.; B.A., Central Michigan University, Mt. Pleasant, Mich., 2005; manager, United States Postal Service; member of the Southfield, Mich., board of education, 1992-1996; member of the Southfield, Mich., city council, 1997-2001; mayor of Southfield, Mich., 2001-2014; unsuccessful candidate for Oakland County, Mich., executive in 2008; unsuccessful candidate for Michigan lieutenant governor in 2010; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412642,
            'bio'        => "ASHFORD, John Bradley, a Representative from Nebraska; born in Omaha, Douglas County, Nebr., November 10, 1949; graduated from Westside High School, Omaha, Nebr., 1967; B.A., Colgate University, Hamilton, N.Y., 1971; J.D., Creighton University, Omaha, Nebr., 1974; staff, United States Senator Roman Hruska of Nebraska; lawyer, private practice; business executive; attorney, Federal Highway Administration, 1974-1975; hearing examiner, Nebr. department of education, 1983-1984; judge, Nebr. court of industrial relations, 1984-1986; member of the Nebraska state legislature, 1987-1994; chief executive officer, Omaha, Nebr., housing authority, 1998-2003; member of the Nebraska state legislature, 2006-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015) "
        ],
        [
            'govTrackId' => 412644,
            'bio'        => "WATSON COLEMAN, Bonnie, a Representative from New Jersey; born in Camden, Camden County, N.J., February 6, 1945; B.A., Thomas Edison State College, Trenton, N.J., 1985; member of the New Jersey state assembly, 1998-2014; New Jersey state assembly majority leader, 2006-2009; member, New Jersey state democratic committee, 2002-2006; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412647,
            'bio'        => "RICE, Kathleen Maura, a Representative from New York; born in Manhattan, New York County, N.Y., February 15, 1965; graduated from Garden City High School, Garden City, N.Y., 1983; B.A., Catholic University of America, Washington, D.C., 1987; J.D., Touro Law Center, Long Island, N.Y., 1991; lawyer; Nassau County, N.Y., district attorney, 2005-2014; unsuccessful candidate for election as New York state attorney general in 2010; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present)."
        ],
        [
            'govTrackId' => 412652,
            'bio'        => "BOYLE, Brendan Francis, a Representative from Pennsylvania; born in Philadelphia, Philadelphia County, Pa., on February 6, 1977; graduated from Cardinal Dougherty High School, Philadelphia, Pa., 1995; B.A., University of Notre Dame, South Bend, Ind., 1999; M.A., Harvard University School of Public Policy, Cambridge, Mass., 2005; radio broadcaster; management consultant; adjunct professor, Drexel University, Philadelphia, Pa.; member of the Pennsylvania state house of representatives, 2008-2014; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412657,
            'bio'        => "BEYER, Donald Sternoff Jr., a Representative from Virginia; born in Trieste, Italy, June 20, 1950; graduated from Gonzaga College High School, Washington, D.C., 1968; B.A., Williams College, Williamstown, Mass., 1972; automobile dealer; lieutenant governor of Virginia, 1990-1998; unsuccessful candidate for Governor of Virginia in 1997; United States Ambassador to Switzerland and Liechtenstein, 2009-2013; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
        [
            'govTrackId' => 412659,
            'bio'        => "PLASKETT, Stacey E., a Delegate from the Virgin Islands; born in New York, Kings County, New York, May 13, 1964; graduated from Choate Rosemary Hall, Wallingford, Conn., 1984; B.S.F.S., Georgetown University, Washington, D.C., 1988; J.D., American University, Washington, D.C., 1994; lawyer, private practice; professional advocate; prosecutor; staff, Delegate Ron de Lugo of the Virgin Islands; staff, House Committee on Ethics, YEARS; staff, United States Department of Justice, 2002-2004; general counsel, Virgin Islands economic development authority, 2007-2014; unsuccessful candidate for nomination to the United States House of Representatives in 2012; elected as a Democrat to the One Hundred Fourteenth Congress (January 3, 2015-present). "
        ],
    ];
}